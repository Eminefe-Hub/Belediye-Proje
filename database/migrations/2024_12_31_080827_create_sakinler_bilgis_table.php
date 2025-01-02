<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSakinlerBilgisTable extends Migration
{


    public function up()
    {
        Schema::create('sakinler_bilgis', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->string('soyad');
            $table->string('telefon')->nullable();
            $table->string('email')->nullable();
            $table->text('adres')->nullable();
            $table->string('resim')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sakinler-bilgis');
    }
}
