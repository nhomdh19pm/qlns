<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopdongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopdong', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nhanvien_id');
            $table->date('ngaybd');
            $table->date('ngaykt')->nullable();
            $table->boolean('loaihopdong')->default(false);
            $table->timestamps();
            $table->foreign('nhanvien_id','fk_hopdong_nhanvien_id')->references('id')->on('nhanvien')->onUpdate('CASCADE');
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
        Schema::table('hopdong', function(Blueprint $table)
        {
            $table->dropForeign('fk_hopdong_nhanvien_id');
            $table->dropColumn('nhanvien_id');
        });
        Schema::dropIfExists('hopdong');
    }
}
