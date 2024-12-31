<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVatandasGeriBildirimlerisTable extends Migration
{
    public function up()
    {
        Schema::create('vatandas_geri_bildirimleris', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Vatandaş adı
            $table->text('feedback'); // Geri bildirim
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vatandas_geri_bildirimleris');
    }
}
