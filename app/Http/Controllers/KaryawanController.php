<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Http\Requests\StoreKaryawanRequest;
use App\Http\Requests\UpdateKaryawanRequest;
use App\Models\Jabatan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->Jabatan = new Jabatan();
        $this->Karyawan = new Karyawan();
    }
    public function index()
    {
        $jabatan_kyn = [
            'jabatan_kyn' => Jabatan::all()
        ];


        // $jabatan_kyn = Jabatan::all();

        // return $jabatan_kyn;

        // $data = Karyawan::all();

        // $data = DB::table('karyawans')->get();

        $data =  DB::table('karyawans')->leftJoin('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.jabatan_id')->get();

        // $data = Karyawan::join('jabatans', 'jabatans.id', '=', 'karyawans.jabatan_id')->get();

        // return DB::table('karyawans')
        //     ->leftJoin('jabatans', 'jabatans.id', '=', 'karyawans.jabatan_id')
        //     ->get();

        // $data = $this->Karyawan->allField();

        // $data = Karyawan::get()->allfield();

        if (request()->ajax()) {
            return datatables()->of($data)
                ->addColumn('Action', function ($data) {
                    $button = " <button class='delete_kyn btn btn-danger btn-sm far fa-trash-alt' id='" . $data->id . "' > Delete</button>";
                    $button .= '&nbsp;&nbsp;';
                    $button .= " <button class='info_kyn btn btn-info btn-sm fa fa-info-circle ' id='" . $data->id . "' > Info</button>";
                    return $button;
                })
                ->rawColumns(['Action'])
                ->addIndexColumn()
                ->make(true);
        }

        // Eager Loading Relationships
        // https://yajrabox.com/docs/laravel-datatables/master/relationships
        // https://www.youtube.com/watch?v=i8Al7ft1BaE

        return view('v_karyawan', $jabatan_kyn);
    }

    public function foto(Request $request)
    {
        $id = $request->id;

        $data = Karyawan::find($id);
        $validator = Validator::make($request->all(), [
            'image_kyn' => 'required|image|max:2048'
        ]);
        $datas = [
            'foto_kyn' => $request->image_kyn,
        ];

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
            ]);
        } else {
            $file = Request()->datas;
            $fileName = Request()->nip_kyn . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('users_pict'), $fileName);

            $data->update($datas);
        }
    }
    public function create()
    {
        //
    }

    public function store(StoreKaryawanRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'nip_kyn' => 'required',
            'nama_kyn' => 'required',
            'alamat_kyn' => 'required',
            'jabatan_kyn' => 'required',
            'email_kyn' => 'required',
            'hp_kyn' => 'required',
            'jk_kyn' => 'required',
            'status_kyn' => 'required',
            'agama_kyn' => 'required',
            'image_kyn' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
            ]);
        } else {
            $karyawan = new Karyawan();
            $karyawan->nip_kyn = $request->input('nip_kyn');
            $karyawan->nama_kyn = $request->input('nama_kyn');
            $karyawan->email_kyn = $request->input('email_kyn');
            $karyawan->alamat_kyn = $request->input('alamat_kyn');
            $karyawan->jabatan_id = $request->input('jabatan_kyn');
            $karyawan->hp_kyn = $request->input('hp_kyn');
            $karyawan->jk_kyn = $request->input('jk_kyn');
            $karyawan->status_kyn = $request->input('status_kyn');
            $karyawan->agama_kyn = $request->input('agama_kyn');

            if ($request->hasFile('image_kyn')) {
                $file = $request->file('image_kyn');
                $fileName = Request()->nip_kyn . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('users_pict'), $fileName);
                $karyawan->foto_kyn = $fileName;
            }
            $karyawan->save();
            return response()->json([
                'status' => 200,
                'message' => 'Gambar berhasil ditambahkan'
            ]);
        }
    }

    public function show(Request $request)
    {
        $id = $request->id;
        // $data = DB::table('karyawans')->leftJoin('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.jabatan_id')->get();
        $data = DB::table('karyawans')->leftJoin('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.jabatan_id')->where('id', $id)->find($id);
        // $data = DB::table('karyawans')->where('id', $id)->find($id);
        // $data = Karyawan::find($id);
        return response()->json(['data' => $data]);
    }

    public function edit(Karyawan $karyawan)
    {
    }

    public function update(UpdateKaryawanRequest $request, Karyawan $karyawan)
    {
        // $id = $request->id;
        // $karyawan = Karyawan::findOrFail($id);

        // $karyawan->nama_kyn = $request->input('nama-kar');

        // $karyawan->save();
        $id = $request->input('uniqueID');
        // $id = 2;
        $karyawan = Karyawan::findOrFail($id);
        // dd($request->all());

        // $karyawan->id = $request->input('uniqueID');

        $karyawan->nip_kyn = $request->input('nipkyn');
        $karyawan->nama_kyn = $request->input('namakyn');
        $karyawan->jabatan_id = $request->input('jabatankyn');
        $karyawan->alamat_kyn = $request->input('alamatkyn');
        $karyawan->email_kyn = $request->input('emailkyn');
        $karyawan->hp_kyn = $request->input('hpkyn');
        $karyawan->jk_kyn = $request->input('jkkyn');
        $karyawan->status_kyn = $request->input('statuskyn');
        $karyawan->agama_kyn = $request->input('agamakyn');


        $karyawan->update();
    }

    public function updateimg(Request $request)
    {
        // dd($request->all());
        $id = $request->input('idimg');
        $nip = $request->input('kynnip');

        $karyawan = Karyawan::findOrFail($id);
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $nip . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('users_pict'), $fileName);
            // unlink(public_path('users_pict') . '/' . '.png');
            $karyawan->foto_kyn = $fileName;
        }
        $karyawan->save();
    }

    public function destroy(Request $request)
    {
        $id = $request->id;

        $nip = $request->nip_kyn;

        $data = Karyawan::findOrFail($id);
        if ($data->foto_kyn <> "") {
            unlink(public_path('users_pict') . '/' . $data->foto_kyn);
            $data->delete();
        } else {
            $data->delete();
        }
    }
}
