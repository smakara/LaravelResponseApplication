<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller {

    //

    public function loginview() {

        return view('login');
    }

    public function logon(Request $request) {

//        return $request ;

        $users = DB::table('users')
                ->where('email', $request->email)
                ->where('password', $request->password)
                ->get();


        if (sizeof($users) == 1) {

            return view('home');
        } else {
            return view('login');
        }
    }

}
