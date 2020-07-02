<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;

class UsersController extends Controller
{
    public function index()
    {
        $users = UserModel::get_all();

        return view('user.index', compact('users'));
    }

    public function create(Request $request)
    {
        $users = UserModel::insert($request);
        return redirect('/users');
    }
}
