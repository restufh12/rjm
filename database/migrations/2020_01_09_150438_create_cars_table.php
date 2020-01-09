<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('cars', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->timestamps();
      $table->double('harga', 8, 2);
      $table->string('NamaMobil', 255);
      $table->enum('Transmisi', ['Manual', 'Automatic']);
      $table->enum('Status', ['Baru', 'Bekas']);
      $table->string('Tahun', 4);
      $table->text('Deskripsi');
      $table->string('BahanBakar', 100);
      $table->double('JumlahKM', 8, 2);
      $table->string('NoPlat', 10);
      $table->string('Warna', 100);
      $table->string('PhotoFile', 255);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('cars');
  }
}
