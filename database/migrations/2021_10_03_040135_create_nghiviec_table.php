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
            $table->increments('id');
            $table->unsignedInteger('nhanvien_id');
            $table->date('ngaybd');
            $table->date('ngaykt');
            $table->string('lydo', 255);
            $table->boolean('huongluong')->default(false);
            $table->timestamps();
            $table->foreign('nhanvien_id','fk_nghiviec_nhanvien_id')->references('id')->on('nhanvien')->onUpdate('CASCADE');
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
        Schema::table('nghiviec', function(Blueprint $table)
        {
            $table->dropForeign('fk_nghiviec_nhanvien_id');
            $table->dropColumn('nhanvien_id');
        });
        Schema::dropIfExists('nghiviec');
    }
}
