<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->User = new User();
    }
    public function index()
    {
        $users = [
            'users' => User::all()
        ];
        $data = DB::table('users')->get();
        // $data =  DB::table('karyawans')->leftJoin('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.jabatan_id')->get();

        if (request()->ajax()) {
            return datatables()->of($data)
                ->addColumn('Action', function ($data) {
                    $button = " <button class='deleteUser btn btn-danger btn-sm fa fa-trash' id='" . $data->id . "' > </button>";
                    $button .= '&nbsp;&nbsp;';
                    $button .= " <button class='editUser btn btn-info btn-sm fa fa-pencil ' id='" . $data->id . "' > </button>";
                    return $button;
                })
                ->rawColumns(['Action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('v_user', $users);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;

        $data = User::findOrFail($id);
        $data->delete();
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'name' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => ['required', 'min:5'],
            'level' => ['required']
        ]);
        $val['password'] = Hash::make($val['password']);


        User::create($val);


        return response()->json($val);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = User::findOrFail($id);
        // $data = DB::table('jabatans')->where('id_jabatan', $id)->first();
        // $data = DB::table('jabatans')->where($id)->first();
        // $data = DB::table('users')->where('id', $id)->first();
        return response()->json(['data' => $data]);
    }

    public function update(Request $request)
    {
        $id = $request->input('ids');
        // $id = 2;
        $users = User::findOrFail($id);
        // $users = DB::table('users')->where('id')
        // dd($request->all());

        // $karyawan->id = $request->input('uniqueID');

        $val = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'min:3', 'max:255'],
            'password' => ['required', 'min:5'],
            'level' => ['required']


        ]);
        $val['password'] = Hash::make($val['password']);


        $users->update($val);
    }
}
