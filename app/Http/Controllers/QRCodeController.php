<?php

namespace App\Http\Controllers;

use App\Models\QRCodeModel;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class QRCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->QRCode = new QRCodeModel();
    }
    public function index()
    {
        $karyawan = [
            'karyawan' => $this->QRCode->list(),
        ];
        return view('v_unduhQR', $karyawan);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QRCode  $qRCode
     * @return \Illuminate\Http\Response
     */
    public function show(QRCodeModel $qRCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QRCode  $qRCode
     * @return \Illuminate\Http\Response
     */
    public function edit(QRCodeModel $qRCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QRCode  $qRCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QRCodeModel $qRCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QRCode  $qRCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(QRCodeModel $qRCode)
    {
        //
    }

    public function showData(Request $request)
    {
        $nip = $request->input('pilih_nama');
        // $nip = 'NIP001';
        $data =  DB::table('karyawans')->leftJoin('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.jabatan_id')->where('nip_kyn', $nip)->first();
        // $data = Karyawan::where('nip_kyn', $nip)->first();

        // $q = QrCode::size(500)
        //     ->format('jpg')
        //     ->generate('codingdriver.com', public_path('qr/qrcode.jpg'));

        // return $q;

        // $image = QrCode::format('jpg')
        //     ->size(500)->errorCorrection('H')
        //     ->generate($nip, public_path('qr/'));
        $qr = QrCode::generate($nip);
        $output_file = '/uploads/img' . $nip . '.svg';
        Storage::disk('public')->put($output_file, $qr);

        // Hasil generate QRCode berhasil di upload di Public/storage/uploads
        // Next aktifkan downloadurl
        // Format masih svg

        // $qr = QrCode::format('png')
        //     ->merge('img/t.jpg', 0.1, true)
        //     ->size(200)->errorCorrection('H')
        //     ->generate('A simple example of QR code!');



        // $qr = QrCode::format('png')->size(399)->color(40, 40, 40)->generate($nip);
        // $qr = QrCode::format('png')->mergeString(public_path('qr/', $nip, '.png'), .3)->generate();

        // $time = time();

        // create a folder
        // QrCode::generate($request->input('pilih_nama'), 'images/' . $time . '.jpg');

        // $img_url = 'images/' . $time . '.svg';

        return response()->json(['data' => $data, $qr]);
    }
}
