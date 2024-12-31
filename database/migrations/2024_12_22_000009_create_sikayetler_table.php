<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSikayetlerTable extends Migration
{
    public function up()
    {
        Schema::create('sikayetler', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('sikayet_metni');
            $table->enum('durum', ['Beklemede', 'Cozuldu', 'Reddedildi']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sikayetler');
    }
}
