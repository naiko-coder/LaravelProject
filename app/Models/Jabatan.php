<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jabatan extends Model
{
    use HasFactory;
    // protected $table = "jabatans";
    protected $fillable = [
        'id',
        'jabatan_kyn'
    ];

    // public function Karyawan()
    // {
    //     return $this->belongsTo(Karyawan::class);
    // }

    public function allData()
    {
        // return DB::table('karyawans')->join('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.id_jabatan')->get();



        // return DB::table('karyawans')
        //     ->leftJoin('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.id_jabatan')
        //     ->get();


        // return DB::table('karyawans')
        //     ->rightJoin('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.id_jabatan')
        //     ->get();

        // return DB::table('karyawans')
        //     ->join('jabatans', 'karyawans.id_jabatan', '=', 'jabatans.id_jabatan')
        //     ->select('jabatans.id_jabatan', 'jabatans.jabatan_kyn')
        //     ->get();


        // return DB::table('tbl_karyawan')
        //     ->leftJoin('tbl_jabatan', 'tbl_jabatan.id_jabatan', '=', 'tbl_karyawan.id_jabatan')
        //     ->get();

        // DB::table('karyawans')
        //     ->join('jabatans', 'id', '=', 'jabatan_kyn')
        //     ->get();
    }

    public function data()
    {
        // return DB::table('jabatans')->where()
    }
}
