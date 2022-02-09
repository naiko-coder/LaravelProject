<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Http\Requests\StoreJabatanRequest;
use App\Http\Requests\UpdateJabatanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Auth\Middleware\Authorize;

class JabatanController extends Controller
{

    public function index()
    {
        $data = Jabatan::get();
        if (request()->ajax()) {
            return datatables()->of($data)
                ->addColumn('Action', function ($data) {
                    $button = " <button class='edit btn btn-info btn-sm far fa-edit' id='" . $data->id_jabatan . "' > Edit</button>";
                    $button .= '&nbsp;&nbsp;';
                    $button .= " <button class='deleteJBT btn btn-danger btn-sm far fa-trash-alt' data-id='" . $data->id_jabatan . "' > Delete</button>";
                    return $button;
                })
                ->rawColumns(['Action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('v_jabatan');
    }

    public function create()
    {
        //
    }

    public function store(StoreJabatanRequest $request)
    {
        $data = new Jabatan();
        $data->jabatan_kyn = $request->jabatan_kyn;
        $simpan = $data->save();
        if ($simpan) {
            return response()->json(['data' => $data, 'text' => 'data berhasi disimpan'], 200);
        } else {
            return response()->json(['data' => $data, 'text' => 'data berhasi disimpan']);
        }
    }

    public function show(Jabatan $jabatan)
    {
        //
    }

    public function edits(Request $request)
    {
        $id = $request->id;
        // $data = Jabatan::find($id);
        // $data = DB::table('jabatans')->where('id_jabatan', $id)->first();
        // $data = DB::table('jabatans')->where($id)->first();
        $data = DB::table('jabatans')->where('id_jabatan', $id)->first();
        return response()->json(['data' => $data]);
    }

    public function updates(Request $request)
    {
        // dd($request->all());
        $id = $request->id;
        $datas = [
            'jabatan_kyn' => $request->jabatan_kyn,
        ];

        return DB::table('jabatans')->where('id_jabatan', $id)->update($datas);

        // $data = Jabatan::find($id);
        // $data = DB::table('jabatans')->where('id_jabatan', $id)->first();
        // DB::table('jabatans')->where('id_jabatan', $data)->update($datas);
        // $data = DB::table('jabatans')->where($id)->get();
        // $data->update($datas);

        // DB::table('tbl_jabatan')
        //     ->where('ID_jabatan', $ID_jabatan)
        //     ->update($data);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        DB::table('jabatans')->where('id_jabatan', $id)->delete();
        // $del = Jabatan::find($id);
        // $del->delete();

    }
}
