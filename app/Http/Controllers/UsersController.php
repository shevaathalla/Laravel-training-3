<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class UsersController extends Controller
{
    public function index()
    {
        $users = UsersModel::get_all();

        return view('user.index', compact('items'));
    }
}
