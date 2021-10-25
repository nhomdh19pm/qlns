<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNghiviecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nghiviec', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nhanvien_id')->constrained('nhanvien');
            $table->date('ngaybd');
            $table->date('ngaykt');
            $table->string('lydo', 255);
            $table->boolean('huongluong')->default(false);
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
        Schema::dropIfExists('nghiviec');
    }
}
