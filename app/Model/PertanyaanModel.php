<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public $timestamp = true;
    public static function get_all()
    {
        $pertanyaan=DB::table('pertanyaan')->orderby('id', 'desc')->get();
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
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
    public static function get_data($pertanyaanId)
    {
        $data = DB::table('pertanyaan')->where('id', $pertanyaanId)->first();
        return $data;
    }

    public static function update($data, $pertanyaanId)
    {
        DB::table('pertanyaan')
        ->where('id', $pertanyaanId)
        ->update(
            [
                'judul' => $data['judul'],
                'isi' => $data['isi'],
                'users_id'  => $data['id'],
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }

    public static function destroy($pertanyaanId)
    {
        DB::table('pertanyaan')
        ->where('id', $pertanyaanId)
        ->delete();
    }
}
