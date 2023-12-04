<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('uye_giris', function (Blueprint $table) {
            $table->id();
            $table->string('adSoyad');
            $table->bigInteger('tc')->nullable();
            $table->string('kullaniciAdi')->unique();
            $table->string('email')->unique();
            $table->string('sifre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('uye_giris');
    }
};
