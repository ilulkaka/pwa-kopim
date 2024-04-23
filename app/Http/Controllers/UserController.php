<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'username' => 'required|email',
            'password' => 'required|min:4',
        ]);

        $email = User::select('status', 'email', 'role')
            ->where('email', $request->email)
            ->get();
        dd($email);
        if ($email->isEmpty()) {
            Session::flash('error', 'Akun tidak terdaftar .');
            return redirect('/');
        }

        if ($email[0]->status == 'Non Aktif') {
            Session::flash('error', 'Akun sudah tidak Aktif .');
            return redirect('/');
        }
        if (!Auth::attempt($request->only('email', 'password'))) {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
            //return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();
        // $userToken = auth()->user();

        auth()
            ->user()
            ->tokens()
            ->delete();

        $token = $user->createToken($user->name)->plainTextToken;

        if ($email[0]->role == 'Kasir') {
            return redirect()->route('transaksi');
        } else {
            return redirect('home');
        }
        /*return response()->json([
            'message' => 'Hi ' . $user->name . ', welcome to home',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);*/
    }
}
