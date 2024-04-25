<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Validator;
use Session;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('frm_login');
        }

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors());
        // }

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // $token = $user->createToken('auth_token')->plainTextToken;

        // // return response()->json([
        // //     'data' => $user,
        // //     'access_token' => $token,
        // //     'token_type' => 'Bearer',
        // // ]);
        // return redirect('home');
    }

    public function loginaksi(Request $request)
    {
        // dd($request->all());

        $email = DB::table('users')
            ->select('status', 'email', 'role')
            ->where('email', $request->email)
            ->get();

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
            // return response()->json(['message' => 'Unauthorized'], 401);
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

    public function index(Request $request)
    {
        $nama = Auth::user()->name;
        $nik = Auth::user()->nik;

        $nobarcode = DB::select(
            "select id_anggota, no_barcode from tb_anggota where nik='$nik' and status='Aktif'"
        );

        if (empty($nobarcode)) {
            $nobarcode1 = 0;
            $idAnggota = 0;
        } else {
            $nobarcode1 = $nobarcode[0]->no_barcode;
            $idAnggota = $nobarcode[0]->id_anggota;
        }
        //dd($nobarcode1);

        $dateNow = date('Y-m-d');
        $current = Carbon::now();
        $tgl = date('d');
        $tmb_bulan = $current->addMonth();
        $krg_bulan = Carbon::now()->subMonths(1);
        $thn = date('Y');
        $bulan = date('Y-m');

        $tgl_awal = date('Y-m') . '-01';
        $tgl_akhir = date('Y-m') . '-25';

        if ($tgl <= 25) {
            $per_awal = $krg_bulan->format('Y-m') . '-16';
            $per_akhir = date('Y-m') . '-15';

            $aktif = DB::select(
                "select sum(nominal)as nominal from tb_trx_belanja where no_barcode = '$nobarcode1' and tgl_trx >= '$per_awal' and tgl_trx <= '$per_akhir'"
            );
        } else {
            $per_awal2 = date('Y-m') . '-16';
            $per_akhir2 = $tmb_bulan->format('Y-m') . '-15';

            $aktif = DB::select(
                "select sum(nominal)as nominal from tb_trx_belanja where no_barcode = '$nobarcode1' and tgl_trx >= '$per_awal2' and tgl_trx <= '$per_akhir2'"
            );
        }

        $tagNow = DB::select(
            "select sum(nominal)as nominal from tb_trx_belanja where no_barcode ='$nobarcode1' and tgl_trx='$dateNow'"
        );

        $nopin = DB::select(
            "select no_pinjaman from tb_pinjaman where no_anggota = '$nobarcode1' and status_pinjaman = 'Open'"
        );

        if (empty($nopin)) {
            $nom = '0';
        } else {
            $nom = $nopin[0]->no_pinjaman;
        }

        /*$ang = PembayaranModel::select('jml_angsuran')
            ->where('no_pinjaman', $nom)
            ->where('tgl_angsuran', '>=', $per_awal)
            ->where('tgl_angsuran', '<=', $per_akhir)
            ->get();*/

        $ang = DB::select(
            "select jml_angsuran, angsuran_ke from tb_pembayaran where no_pinjaman='$nom' and tgl_angsuran >= '$tgl_awal' and tgl_angsuran <= '$tgl_akhir'"
        );

        if (empty($ang)) {
            $jml_ang = '0';
            $angke = '0';
        } else {
            $jml_ang = $ang[0]->jml_angsuran;
            $angke = $ang[0]->angsuran_ke;
        }

        $simpok = DB::select(
            "select sum(jml_simpanan)as simpok from tb_simpanan where no_anggota = '$nobarcode1' and jenis_simpanan = 'Pokok'"
        );

        $simwa = DB::select(
            "select sum(jml_simpanan)as simwa from tb_simpanan where no_anggota = '$nobarcode1' and jenis_simpanan = 'Wajib'"
        );

        $iuran_wajib = DB::select(
            " select jml_simpanan from tb_simpanan where no_anggota = '$nobarcode1' and jenis_simpanan = 'Wajib' and date_format(tgl_simpan, '%Y-%m') = '$bulan' "
        );

        if (empty($iuran_wajib)) {
            $iuran = '0';
        } else {
            $iuran = $iuran_wajib[0]->jml_simpanan;
        }
        //dd($iuran_wajib[0]->jml_simpanan);

        $qrCode = QrCode::size(350)->generate('kopim.kopbm.com/' . $idAnggota);
        return view('home', [
            'thn' => $thn,
            'aktif' => $aktif,
            'angsuran' => $jml_ang,
            'angke' => $angke,
            'no_barcode' => $nobarcode1,
            'simpok' => $simpok[0]->simpok,
            'simwa' => $simwa[0]->simwa,
            'iuran' => $iuran,
            'qrCode' => $qrCode,
            'tagihan_sekarang' => $tagNow[0]->nominal,
        ]);
    }

    public function logoutaksi()
    {
        //return redirect('/');
        auth()
            ->user()
            ->tokens()
            ->delete();
        Auth::logout();
        return redirect('/');
        //return [
        //  'message' =>
        //    'You have successfully logged out and the token was successfully deleted',
        //];
    }

    public function settings()
    {
        return view('settings/settings');
    }
}
