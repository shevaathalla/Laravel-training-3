<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $pertanyaan=DB::table('pertanyaan')->get();
        return $pertanyaan;
    }
}
