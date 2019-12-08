<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function deleteEvent($id) {
        DB::table('events')->where('id', '=', $id)->delete();
        return redirect()->route('events.show');
    }

    public function showEvents() {
        return view('events',['events' => DB::table('events')->select('*')->get()]);
    }

    public function createEvent(Request $req) {
        DB::table('events')->insert([
            'name' => $req->get('name'),
            'time_start' => strtotime($req->get('start')),
            'time_end' => strtotime($req->get('start')),
            'description' => $req->get('description'),
            'location' => $req->get('location')
        ]);
        return redirect()->route('events.show');
    }
}