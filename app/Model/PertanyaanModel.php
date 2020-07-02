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
    public static function insert($data)
    {
        DB::table('pertanyaan')->insert(
            [
                'judul' => $data['judul'],
                'isi' => $data['isi'],
                'users_id' => 1,
                'like' => 0,
                'dislike' => 0,
                'vote' => 0,
            ]
        );
    }
}
