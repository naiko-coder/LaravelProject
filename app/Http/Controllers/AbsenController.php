<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Http\Requests\StoreAbsenRequest;
use App\Http\Requests\UpdateAbsenRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->Absen = new Absen();
    }
    public function index()
    {
        $jadwal = [
            'masuk' => $this->Absen->masuk(),
            'keluar' => $this->Absen->keluar(),
            'toleransi' => $this->Absen->toleransi(),
        ];
        return view('v_absen', $jadwal);
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
     * @param  \App\Http\Requests\StoreAbsenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAbsenRequest $request)
    {
        /**Masalah
        Jika Absen masuk dan tepat waktu maka berhasil absen munculkan notifikasi
        Jika Absen Masuk dan tidak tepat waktu, absen gagal data tidak masuk ke database
        Jika Data qr belum terdaftar, tampilkan pesan data belum terdaftar
        Jika absen keluar belum pada waktunya, maka absen tidak bisa dilakukan
        Jika absen keluar tepat waktu, maka status ok di database
        Jika tidak absen keluar, maka status bolos kerja di database
        Absen ini menggunakan 2 table, table pertama akan menghapus datanya setiap hari, tabel kedua akan tetap disimpan sebagai histori
         */

        // Absen dan ketentuan
        $id_nip = $request->input('Nip_kyn');
        $timeNow = Carbon::now()->setTimezone('Asia/Jakarta');

        $toleransi = DB::table('jadwals')->where('id', '1')->value('toleransi');
        $checkTimeIn = DB::table('jadwals')->where('id', '1')->value('masuk');
        $checkTimeOut = DB::table('jadwals')->where('id', '1')->value('keluar');
        $checkTimeInAfter = Carbon::parse($checkTimeIn)->addMinute($toleransi)->format('H:i:s');
        $tanggal = $timeNow->toDateString();

        // return $checkTimeInAfter;

        // Check data yang di input
        $isExist = DB::table('karyawans')->where('nip_kyn', $id_nip)->exists();
        $nameCheck = DB::table('karyawans')->where('nip_kyn', $id_nip)->value('nama_kyn');
        $jabatanChecks = DB::table('karyawans')->leftJoin('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.jabatan_id')->where('nip_kyn', $id_nip)->value('jabatan_kyn');

        if ($isExist) {
            if ($checkTimeInAfter < ($timeNow)) {
                $absen = new Absen();
                $absen->nip_kyn = $id_nip;
                $absen->masuk = $request->input('option');
                $absen->jam_msk = $timeNow;
                $absen->nama_kyn = $nameCheck;
                $absen->jabatan_kyn = $jabatanChecks;
                $absen->tanggal = $tanggal;
                $absen->save();


                $returnData = 'Absen Masuk Berhasil';
                return response()->json($returnData, 200);
            } else if ($checkTimeInAfter > ($timeNow)) {
                $returnData = 'Terlambat, Tidak boleh absen';
                return response()->json($returnData, 500);
            }
        } else {
            $returnData = 'QR Code Belum terdaftar';
            return response()->json($returnData, 500);
        }
    }

    public function keluar(StoreAbsenRequest $request)
    {
        $id_nip = $request->input('Nip_kyn');
        $timeNow = Carbon::now()->setTimezone('Asia/Jakarta');

        // Cek data apakah sudah ada di table absen
        $isExist = DB::table('absens')->where('nip_kyn', $id_nip)->exists();

        if ($isExist) {
            $input = array(
                'pulang' => $request->input('option'), 'jam_plng' => $timeNow,
            );
            DB::table('absens')->where('nip_kyn', $id_nip)->update($input);
        } else {
            $returnData = 'Anda Belum Absen Masuk Hari ini';
            return response()->json($returnData, 500);
        }

        // $returnData = 'Proses';
        // return response()->json($returnData, 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAbsenRequest  $request
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbsenRequest $request, Absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $absen)
    {
        //
    }

    public function temp()
    {
        return DB::table('absens')->get();
    }
}
