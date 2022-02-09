<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model
{
    use HasFactory;

    public function retrieve_karyawan()
    {
        return DB::table('karyawans')->count('nip_kyn');
    }
    public function retrieve_jabatan()
    {
        return DB::table('jabatans')->count('jabatan_kyn');
    }
    public function total_male()
    {
        return DB::table('karyawans')->where('jk_kyn', 'Pria')->count();
    }
    public function total_female()
    {
        return DB::table('karyawans')->where('jk_kyn', 'Wanita')->count();
    }
}
