<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('state', function (Blueprint $table) {
            $table->integer('stateid');
            $table->string('statename');
            $table->integer('countryid');
      });


      DB::table('state')->insert([
        'stateid' => 1,
        'statename' => 'Kerala',
        'countryid' => 1
        
    ]);

    DB::table('state')->insert([
        'stateid' => 2,
        'statename' => 'Tamil Nadu',
        'countryid' => 1
        
    ]);

    DB::table('state')->insert([
        'stateid' => 3,
        'statename' => 'Dubai',
        'countryid' => 2
        
    ]);

    DB::table('state')->insert([
        'stateid' => 4,
        'statename' => 'Sharjah',
        'countryid' => 1
        
    ]);





    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('[state]');
    }
};
