<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnerilersTable extends Migration
{
    public function up()
    {
        Schema::create('onerilers', function (Blueprint $table) {
            $table->id();
            $table->string('baslik'); // Öneri başlığı
            $table->text('icerik'); // İçerik
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('onerilers');
    }
}
