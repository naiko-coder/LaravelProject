<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->Jadwal = new Jadwal();
    }

    public function index()
    {
        $jadwal = [
            'masuk' => $this->Jadwal->masuk(),
            'keluar' => $this->Jadwal->keluar(),
            'toleransi' => $this->Jadwal->toleransi(),
        ];
        return view('v_jadwal', $jadwal);

        // return view('v_jadwal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = '1';
        $jadwal = Jadwal::firstOrNew();
        $jadwal->id = $id;
        $jadwal->masuk = $request->jamMasuk;
        // $jadwal->mntmasuk = $request->menitMasuk;
        $jadwal->keluar = $request->jamKeluar;
        // $jadwal->mntkeluar = $request->menitKeluar;
        $jadwal->toleransi = $request->toleransi;
        $jadwal->save();

        // return response()->json(['data' => $jadwal]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }
}
