<?php

namespace App\Http\Controllers;

use App\User;
use App\Company;
use App\Groups;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use PulkitJalan\Google\Facades\Google;

class BaseController extends Controller
{

    public function groupsPage() {
        if (session()->get('type') === null) {
            return view('groups', ['groups' => null]);
        } else if (session()->get('type') === 0) {
            return view('groups', ['groups' => Groups::getUserGroup()]);
        } else if (session()->get('type') === 1) {
            return view('groups', ['groups' => Groups::getGroupsFromOwner()]);
        }
    }

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
