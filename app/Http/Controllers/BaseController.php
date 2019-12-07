<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{

    public function registerPage()
    {
        return view('register');
    }
    public function indexPage()
    {
        return view('welcome', ['data' => ['fudbal', 'košarka', 'odbojka', 'tenis', 'trčanje']]);
    }
<<<<<<< HEAD

    public function loginPage() {
        return view('login');
    }
}
=======
}
>>>>>>> 753db741a097fbaab16dff259335700f281fe88f
