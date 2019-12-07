<?php

namespace App\Http\Controllers;

use App\User;
use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{

    public function registerPage() {
        return view('register', ['companies' => Company::getAll()]);
    }
    public function indexPage() {
        return view('welcome', ['data' => ['fudbal', 'košarka', 'odbojka', 'tenis', 'trčanje']]);
    }
    public function loginPage() {
        return view('login');
    }
    public function addEventPage() {
        return view('addEvent');
    }
}
