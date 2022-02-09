<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManualController extends Controller
{
    public function __construct()
    {
        $this->Manual = new Manual();
    }
    public function index()
    {
        $karyawan = [
            'karyawan' => $this->Manual->list(),
        ];
        return view('v_manual', $karyawan);
    }

    public function showData(Request $request)
    {
        $nip = $request->input('pilih_karyawan');
        $data =  DB::table('karyawans')->leftJoin('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.jabatan_id')->where('nip_kyn', $nip)->first();
        return response()->json(['data' => $data]);
    }

    public function store(Request $request)
    {

        $curentTime = '00:00:00';
        $data = [
            'nip_kyn' => Request()->nip_karyawan,
            'nama_kyn' => Request()->nama_karyawan,
            'jabatan_kyn' => Request()->jabatan_karyawan,
            'tanggal' => Request()->tanggal_input,
            'jam_msk' => $curentTime,
            'jam_plng' => $curentTime,
            'info' => Request()->radioOption,
        ];

        $this->Manual->tambahData($data);
        return response()->json();
    }
}
