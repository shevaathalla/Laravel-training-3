<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class UserModel
{
    public static function get_all()
    {
        $users=DB::table('users')->get();
        return $users;
    }

    public static function users($new)
    {
        $new_users = DB::table('users')->insert();
        return $new_users;
    }
}
