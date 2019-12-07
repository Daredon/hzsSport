<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{

    public function registerPage() {
        return view('register');
    }
    public function indexPage() {
        return view('welcome', ['data' => ['fudbal', 'kosarka', 'odbojka', 'tenis', 'trcanje']]);
    }
}