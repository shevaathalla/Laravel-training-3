<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class UserModel
{
    public static function get_all()
    {
        $users=DB::table('users')->get();
        return $users;
    }
    public static function insert($data)
    {
        DB::table('users')->insert(
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['pwd'],
                'photo' => 'none'
            ]
        );
    }
}
