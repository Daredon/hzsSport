<?php

namespace App;

use Illuminate\Support\Facades\DB;

class User
{

    public static function getData($user_secret) {
        $client = Google::getClient();
        $fit = Google::make('fitness');
        $headers = [
            "Content-Type: application/json",
            "Authorization: Bearer GsqJD937dsd3jsfk32DF3w",
            "https://www.googleapis.com/fitness/v1/users/me/dataSources"
        ];
        $fit->authenticate(['secret' => $user_secret, 'headers' => $headers]);
        return json_decode($fit);
    }

    public static function calculatePoints($data, $month) {
        $points = 0;
        $points += $data->walked_distance * 0.023;
        $points += $data->blood_pressure * 0.037;
        $points += $data->bicycle_distance * 0.13;
        $points += $data->runned_distance * 0.42;
        $points += $data->weight_loss_percentage * 0.03;
        $points += $data->height_weight_ratio * 0.27;
        $point *= 2.34;
        return $points;
    }

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
