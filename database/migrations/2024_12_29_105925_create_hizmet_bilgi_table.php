<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHizmetBilgiTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('hizmet_bilgis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hizmet_kategori_id')->references('id')->on('hizmet_kategoris')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('author')->nullable()->default('Belediye');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('hizmet_bilgis');
    }
};
