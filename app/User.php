<?php

namespace App;

use Illuminate\Support\Facades\DB;

class User
{
    public function addUser($data) {
        DB::table('users')->insert([
            'username' => $data->username,
            'password' => hash('sha256', hash('sha256', $data->password)),
        ]);
    }
}
