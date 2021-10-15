<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);



   

        for ($i = 1; $i <= 21; $i++) {


            DB::table('employees')->insert([
                'last_name' => Str::random(5),
                'first_name' => Str::random(5),
                'company' => Str::random(4),
                'email' => Str::random(5) . '@gmail.com',
                'phone_number' => Hash::make('password')
            ]);
            
            
             DB::table('companies')->insert([
                'Name' => Str::random(5),
                'email' => Str::random(5),
                'logo' => Str::random(4),
                'website' => Str::random(5)
            ]);
        }
    }

}
