<?php

namespace App\Controllers;

use App\Models\User;

class HomeController extends BaseController {

    public static function index () {
        $users = User::all();
        // print_r($users);
        self::loadView('/home', [
            'title' => 'Homepage',
            'users' => $users
        ]);
    }

    public static function edit ($id) {
        $user = User::find($id);
        self::loadView('/users/edit', [
            'title' => 'Edit user',
            'user' => $user
        ]);
    }

    public static function get_users() {
        $users = User::all();
        header("Content-type:application/json");

        echo json_encode($users);


        exit;
    }

}