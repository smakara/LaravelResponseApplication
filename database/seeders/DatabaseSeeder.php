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





//        for ($i = 1; $i <= 21; $i++) {


        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);

        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);
        DB::table('employees')->insert([
            'last_name' => Str::random(5),
            'first_name' => Str::random(5),
            'company' => Str::random(4),
            'email' => Str::random(5) . '@gmail.com',
            'phone_number' => Hash::make('password')
        ]);

//========================================================
//      Walmart	http://www.stock.walmart.com
//2	Exxon Mobil	http://www.exxonmobil.com
//3	Apple	http://www.apple.com
//4	Berkshire Hathaway	http://www.berkshirehathaway.com
//5	Amazon.com	http://www.amazon.com
//6	UnitedHealth Group	http://www.unitedhealthgroup.com
//7	McKesson	http://www.mckesson.com
//8	CVS Health	http://www.cvshealth.com
//9	AT&T	http://www.att.com
//10	AmerisourceBergen	http://www.amerisourcebergen.com
//11	Chevron	http://www.chevron.com
//12	Ford Motor	http://www.corporate.ford.com
//13	General Motors	http://www.gm.com
//14	Costco Wholesale	http://www.costco.com
//15	Alphabet	http://www.abc.xyz
//16	Cardinal Health	http://www.cardinalhealth.com
//17	Walgreens Boots Alliance	http://www.walgreensbootsalliance.com
//18	JPMorgan Chase	http://www.jpmorganchase.com
//19	Verizon Communications	http://www.verizon.com
//20	Kroger	http://www.thekrogerco.com
//21	General Electric	http://www.ge.com

        DB::table('companies')->insert([
            'Name' => "Walmart",
            'email' => "admin@walmart.com",
            'logo' => "",
            'website' =>"http://www.stock.walmart.com"
        ]);
         DB::table('companies')->insert([
            'Name' => "Exxon Mobil",
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => "Exxon Mobil"
        ]);
          DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
           DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
            DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
             DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
              DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
               DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
               
                 DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
         DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
          DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
           DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
            DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
             DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
              DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
               DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
               
                 DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
         DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
          DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
           DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
            DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
             DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
              DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
               DB::table('companies')->insert([
            'Name' => Str::random(5),
            'email' => Str::random(5),
            'logo' => Str::random(4),
            'website' => Str::random(5)
        ]);
//        }
    }

}
