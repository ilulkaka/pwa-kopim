<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'username' => 'required|min:4',
            'password' => 'required|min:4',
        ]);

        $data = Usermodel::where('user_name', $request['username'])->first();

        if ($data) {
            if (Hash::check($request['password'], $data->password)) {
                Session::put('name', $data->user_name);
                Session::put('id', $data->id);
                Session::put('nik', $data->nik);

                //$id = Session::get('id');
                $user = $this->user_dept($data->id);

                Session::put('dept', $user[0]->dept_section);
                Session::put('level', $user[0]->nama_jabatan);
                Session::put('kode_dept', $user[0]->kode_departemen);
                //Session::put('dept', $data->departemen);
                //Session::put('level', $data->level_user);
                //Session::put('level_user', $data->level_user);
                Session::put('login', 1);

                $request->session()->save();

                // return redirect()->route('home');

                $data->rollApiKey(); //Model Function

                $now = Carbon::now();
                $upd_last_login = Usermodel::where('id', $data->id)->update([
                    'last_login' => $now->format('Y-m-d H:i:s.v'),
                ]);

                return [
                    'user' => $data,
                    'token' => base64_encode($data->api_token),
                    'message' => 'Authorization Successful!',
                    'success' => true,
                ];
            } else {
                Session::flash('alert', 'Password atau email salah !');
                //return redirect('/login')->with('alert','Password atau email salah !');
                //return redirect()->route('login');
                return [
                    //'user' => $data,
                    //'token'=>base64_encode($data->api_token),
                    'message' => 'Authorization failed!',
                    'success' => false,
                ];
            }
        } else {
            Session::flash('alert', 'Password atau email salah !');
            // return redirect('/login')->with('alert','Password atau email salah !');
            //return redirect()->route('login');
            return [
                //'user' => $data,
                //'token'=>base64_encode($data->api_token),
                'message' => 'Authorization failed!',
                'success' => false,
            ];
        }
    }
}
