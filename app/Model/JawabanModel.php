<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class JawabanModel
{
    public static function get_all($pertanyaanId)
    {
        $jawaban=DB::table('jawaban')->where('pertanyaan_id', '=', $pertanyaanId)->get();
        return $jawaban;
    }
    public static function insert($data, $pertanyaanId)
    {
        DB::table('jawaban')->insert(
            [
                'judul' => $data['judul'],
                'isi' => $data['isi'],
                'user_id' => $data['id'],
                'pertanyaan_id' => $pertanyaanId,
                'like' => 0,
                'dislike' => 0,
                'vote' => 0,
            ]
        );
    }
}
