<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Ini contoh cara Join table
         */
        $users = DB::table('informasi_pengguna')
            ->leftJoin('referensi_agama', 'informasi_pengguna.agama_id', '=', 'referensi_agama.id_agama')
            ->leftJoin('referensi_jenis_kelamin', 'informasi_pengguna.jenis_kelamin_id', '=', 'referensi_jenis_kelamin.id_jenis_kelamin')
            ->leftJoin('referensi_status_perkawinan', 'informasi_pengguna.status_perkawinan_id', '=', 'referensi_status_perkawinan.id_status_perkawinan')
            ->get();
        return view('home', compact('users'));
    }
}
