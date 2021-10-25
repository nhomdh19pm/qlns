<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMucluongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mucluong', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phongban_id')->constrained('phongban');
            $table->foreignId('chucvu_id')->constrained('chucvu');
            $table->integer('luongcb');
            $table->string('phucap');
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
        Schema::dropIfExists('mucluong');
    }
}
