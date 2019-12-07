<?php

namespace App;

use Illuminate\Support\Facades\DB;

class User
{
    public static function addUser($data) {
        DB::table('users')->insert([
            'username' => $data->username,
            'password' => hash('sha256', hash('sha256', $data->password)),
            'email' => $data->email
        ]);

        return DB::table('users')->select('id')->where('email', '=', $data->email)->get()[0]->id;
    }

    public static function getUserPassword($input) {
        $res = DB::table('users')->select('id', 'password', 'username')->where('username', '=', $input)->orWhere('email', '=', $input)->get();
        return $res;
    }
}
