<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function details()
    {
        return view('details');
    }

    public function listTransaksi(Request $request)
    {
        dd($request->all());
    }
}
