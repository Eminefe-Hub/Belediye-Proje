<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalisanlarTable extends Migration
{
    public function up()
    {
        Schema::create('calisanlar', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->string('soyad');
            $table->foreignId('departman_id')->references('id')->on('departmanlar')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('pozisyon');
            $table->string('eposta')->unique();
            $table->string('telefon')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calisanlar');
    }
}
