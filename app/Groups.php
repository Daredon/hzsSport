<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Groups
{

    public static function getUserGroup() {
        if (session()->get('id') !== null) {
            return DB::table('users')->select('id', 'username', 'group_id')->where('group_id', '=', session()->get('id'));
        } else {
            return null;
        }
    }

    public static function getGroupsFromOwner() {
        $group_ids = DB::table('groups')->select('id')->where('owner', '=', session()->get('id'))->get();
        $ids = []; 
        $groups = [];
        foreach($group_ids as $id) {
            array_push($ids, $id->id);
        }
        foreach ($ids as $id) {
            $result = DB::table('users')->select('id', 'username', 'group_id')->where('group_id', '=', $id)->get();
            array_push($groups, $result);
        }
        return $groups[0];
    }

    public static function getGroup($id) {
        return DB::table('users')->select('id', 'username')->where('group_id', '=', $id);
    }
}
