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
    Schema::table('users', function (Blueprint $table) {
        $table->string('username')->unique()->change(); // Jadikan username unik
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('username')->change(); // Hapus aturan unik saat rollback
    });
}

};
