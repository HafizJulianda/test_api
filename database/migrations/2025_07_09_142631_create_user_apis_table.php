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
    Schema::create('user_apis', function (Blueprint $table) {
        $table->id(); // id lokal
        $table->integer('api_id'); // id dari API Reqres
        $table->string('email');
        $table->string('first_name');
        $table->string('last_name');
        $table->string('avatar');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_apis');
    }
};
