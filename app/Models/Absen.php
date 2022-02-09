<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Absen extends Model
{
    use HasFactory;

    protected $table = "absens";

    // protected $dates = ['masuk', 'keluar'];


    public function masuk()
    {
        return DB::table('jadwals')->where('id', '1')->value('masuk');
    }
    public function keluar()
    {
        return DB::table('jadwals')->where('id', '1')->value('keluar');
    }
    public function toleransi()
    {
        return DB::table('jadwals')->where('id', '1')->value('toleransi');
    }
}
