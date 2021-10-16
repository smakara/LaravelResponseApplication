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

            $companies = DB::table('companies')
                    ->get();
            $data = Array(
                "companies" => $companies
            );

            return view('home', $data);
        } else {
            return view('login');
        }
    }

    public function viewcompany($id) {

        $companies = DB::table('companies')
                ->where('id', $id)
                ->first();


        $data = Array(
            "vcomp" => $companies
        );

        return view('vcomp', $data);
    }

    public function cupdate(Request $request) {



        DB::table('companies')
                ->where('id', $request->id)
                ->update([
                    'Name' => $request->name,
                    'email' => $request->email,
                    'website' => $request->website
        ]);



        return self::home();
    }

    public function newcompany() {

        return view('ncomp');
    }

    function home() {

        $companies = DB::table('companies')
                ->get();
        $data = Array(
            "companies" => $companies
        );

        return view('home', $data);
    }

    public function deletecompany($id) {



        DB::table('companies')
                ->where('id', $id)
                ->delete();

        return self::home();
    }

    public function cnew(Request $request) {

        DB::table('companies')
                ->insert([
                    'Name' => $request->name,
                    "email" => $request->email,
                    "website" => $request->website
        ]);

        return self::home();
    }
    
    
    public function employees (){
        
        return view ('employees.ehome') ;
    }

}
