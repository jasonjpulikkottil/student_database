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
        Schema::create('country', function (Blueprint $table) {
            $table->integer('countryid');
            $table->string('countryname');
      });

      DB::table('country')->insert([
        'countryid' => 1,
        'countryname' => 'India'
    ]);
    DB::table('country')->insert([
        'countryid' => 2,
        'countryname' => 'UAE'
    ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('[country]');
    }
};
