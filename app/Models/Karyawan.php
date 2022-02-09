<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Karyawan extends Model
{
    use HasFactory;
    // protected $table = "karyawans";



    protected $fillable = [
        'nip_kyn',
        'nama_kyn',
        'email_kyn',
        'jabatan_kyn',
        'hp_kyn',
        'alamat_kyn',
        'jk_kyn',
        'status_kyn',
        'agama_kyn',
        'foto_karyawan'
    ];

    public function getPictureAttribute($value)
    {
        if ($value) {
            return asset(public_path('users_pict' . $value));
        } else {
            echo 'data not found';
        }
    }

    public function allData($id)
    {
        return DB::table('karyawans')->where($id, 'id')->get();
    }

    public function nama()
    {
        return DB::table('karyawans')->get();
    }

    public function allDatas()
    {
        // return DB::table('karyawans')
        //     ->join('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.id_jabatan')
        //     ->get();

        return DB::table('jabatans')->get();
    }


    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id');
    }
}
