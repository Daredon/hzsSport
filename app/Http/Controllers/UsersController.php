<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function logout() {
        session()->flush();
        return redirect()->route('index');
    }

    public function loginUser(Request $req) {
        $errors = [];
        $pwd = User::getUserPassword($req->get('input'));
        if (!isset($pwd[0])) {
            array_push($errors, 'Korisnik ne postoji.');
        } else {
            if ($pwd[0]->password === hash('sha256', hash('sha256', $req->get('password')))) {
                session(['id' => $pwd[0]->id]);
                session(['username' => $pwd[0]->username]);
                session(['type' => $pwd[0]->type]);
            } else {
                array_push($errors, 'Pogresna lozinka.');
            }
        }
        if (empty($errors)) {
            return redirect()->route('index');
        } else {
            return redirect()->route('login')->with('errors', $errors);
        }
    }

    public function addUser(Request $req) {
        $errors = [];
        $res = count(DB::table('users')->select('username')->where('username', '=', $req->get('username'))->get());
        if ($res > 0) {
            array_push($errors, 'Username je zauzet');
        } 
        $res = count(DB::table('users')->select('username')->where('email', '=', $req->get('email'))->get());
        if ($res > 0) {
            array_push($errors, 'Email je zauzet');
        }
        if ($req->get('password') !== $req->get('password_conf')) {
            array_push($errors, 'Sifre se ne poklapaju.');
        } else if (strlen($req->get('password')) < 8) {
            array_push($errors, 'Sifra mora imati 8 ili vise karaktera.');
        }
        if (!empty($errors)) {
            return redirect()->route('register')->with('errors', $errors);
        } else {
            $id = User::addUser($req);
            session(['id' => $id]);
            session(['username' => $req->get('username')]);
            session(['type' => 0]);
            return redirect()->route('index');
        }
    }
}