<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Company
{
    public static function getAll() {
        return DB::table('companies')->select('name', 'id')->orderBy('name', 'asc')->get();
    }

    public static function addCompany($name) {
        DB::table('companies')->insert([
            'name' => $name
        ]);
    }
}
