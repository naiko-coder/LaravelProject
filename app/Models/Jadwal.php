<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jadwal extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $fillable = ['masuk', 'mntmasuk', 'keluar', 'mntkeluar', 'toleransi'];

    public function masuk()
    {
        return DB::table('jadwals')->value('masuk');
    }

    public function keluar()
    {
        return DB::table('jadwals')->value('keluar');
    }

    public function toleransi()
    {
        return DB::table('jadwals')->value('toleransi');
    }
}
