<?php

namespace App;

use Illuminate\Support\Facades\DB;

class User
{
    public static function addUser($data) {
        DB::table('users')->insert([
            'username' => $data->username,
            'password' => hash('sha256', hash('sha256', $data->password)),
            'email' => $data->email,
            'firstname' => $data->fname,
            'lastname' => $data->lname,
            'company' => $data->company,
            'ingroup' => 0,
            'group_id' => null
        ]);

        return DB::table('users')->select('id')->where('email', '=', $data->email)->get()[0]->id;
    }

    public static function getUser($name) {
        return DB::table('users')->select(
            'id',
            'username',
            'firstname',
            'lastname',
            'email',
            'company',
            'ingroup',
            'group_id'
        )->where('username', '=', $name)->get()[0];
    } 

    public static function getUserPassword($input) {
        $res = DB::table('users')->select('id', 'password', 'username', 'type')->where('username', '=', $input)->orWhere('email', '=', $input)->get();
        return $res;
    }
}
