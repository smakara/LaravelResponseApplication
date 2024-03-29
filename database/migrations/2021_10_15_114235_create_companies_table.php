<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void  
     * Companies DB table consists of these fields: Name (required), email, logo (minimum 100×100), website
     */
    public function up() {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('email')->unique();
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('companies');
    }

}
