<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function details()
    {
        return view('details');
    }

    public function listTransaksi(Request $request)
    {
        // dd($request->all());

        $draw = $request->input('draw');
        $search = $request->input('search')['value'];
        $start = (int) $request->input('start');
        $length = (int) $request->input('length');

        $nik = DB::table('users')
            ->select('nik')
            ->where('id', $request->id)
            ->get();
        $no_barcode1 = DB::table('tb_anggota')
            ->select('no_barcode')
            ->where('nik', $nik[0]->nik)
            ->get();
        $no_barcode = $no_barcode1[0]->no_barcode;

        $Datas = DB::table('tb_trx_belanja')
            ->select('tgl_trx', 'nominal')
            ->where('no_barcode', $no_barcode)
            // ->where('tgl_trx', '>=', $request->tgl_awal)
            // ->where('tgl_trx', '<=', $request->tgl_akhir)
            ->orderBy('tgl_trx', 'asc')
            ->skip($start)
            ->take($length)
            ->get();
        $count = DB::table('tb_trx_belanja')
            ->select('tgl_trx', 'nominal')
            ->where('no_barcode', $no_barcode)
            // ->where('tgl_trx', '>=', $request->tgl_awal)
            // ->where('tgl_trx', '<=', $request->tgl_akhir)
            ->count();

        return [
            'draw' => $draw,
            'recordsTotal' => $count,
            'recordsFiltered' => $count,
            'data' => $Datas,
        ];
    }
}
