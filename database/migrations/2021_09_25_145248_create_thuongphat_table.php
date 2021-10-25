<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThuongphatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuongphat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nhanvien_id')->constrained('nhanvien');
            $table->boolean('loai')->default(false);
            $table->integer('sotien');
            $table->string('lydo', 255);
            $table->integer('thang');
            $table->integer('nam');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thuongphat');
    }
}
