<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function addUser(Request $data) {
        $res = count(DB::table('users')->select('username')->where('username', '=', $req->get('username')));
        if ($req == 0) {
            User::addUser($req);
            return view('success.register');
        } else {
            return view('error.register');
        }
    }
}