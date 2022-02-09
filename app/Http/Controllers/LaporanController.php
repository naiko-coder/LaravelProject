<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index(Request $request)

    {
        // $data = Laporan::all();
        // if (request()->ajax()) {
        //     return datatables()->of($data)
        //         ->addColumn('Action', function ($data) {
        //             $button = " <button class='ubah btn btn-info btn-sm far fa-edit' id='" . $data->id . "' > Edit</button>";
        //             $button .= '&nbsp;&nbsp;';
        //             $button .= " <button class='hapus btn btn-danger btn-sm far fa-trash-alt' data-id='" . $data->id . "' > Delete</button>";
        //             return $button;
        //         })
        //         ->rawColumns(['Action'])
        //         ->addIndexColumn()
        //         ->make(true);
        // }
        // return view('v_laporan');

        {
            $data = Laporan::all();
            if (request()->ajax()) {

                if (!empty($request->from_date)) {
                    $data = DB::table('laporans')
                        ->whereBetween('tanggal', array($request->from_date, $request->to_date))
                        ->get();
                } else {
                    $data = DB::table('laporans')
                        ->get();
                }
                return datatables()->of($data)->make(true);
            }
            return view('v_laporan');
        }
    }
}
