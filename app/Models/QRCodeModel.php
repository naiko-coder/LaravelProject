<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class QRCodeModel extends Model
{
    use HasFactory;

    public function list()
    {
        return DB::table('karyawans')->get();
    }
}
