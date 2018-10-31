<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('location_id');
            $table->string('ppin'); // A1592001
            $table->string('name'); // Bright Beginnings Academy
            $table->string('slug')->unique(); // bright-beginnings-academy-mobile-al
            $table->string('title'); // Bright Beginnings Academy - Mobile, AL
            $table->string('description')->nullable();
            $table->text('content')->nullable();
            $table->json('meta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
