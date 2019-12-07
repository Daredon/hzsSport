<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Company
{
    public static function getAll() {
        $data = DB::table('companies')->select('name', 'id')->orderBy('name', 'desc')->get();
        $data = json_decode(json_encode($data), true);
        $companies = [];
        foreach ($data as $company) {
            $companies[$company['id']] = ucfirst($company['name']);
        }
        return $companies;
    }

    public static function addCompany($name) {
        DB::table('companies')->insert([
            'name' => $name
        ]);
    }
}
