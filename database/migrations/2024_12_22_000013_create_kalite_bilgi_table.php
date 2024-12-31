<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaliteBilgiTable extends Migration
{
    public function up()
    {
        Schema::create('kalite_bilgi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->references('id')->on('kalite_kategori')->onDelete('cascade');
            $table->string('location');
            $table->text('aciklama');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kalite_bilgi');
    }
}
