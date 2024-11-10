<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('komentars', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('email');
        $table->string('subjek');
        $table->text('pendapat');
        $table->timestamps();
    });
}

};
