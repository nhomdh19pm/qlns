<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaohiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baohiem', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nhanvien_id');
            $table->unsignedInteger('loaibaohiem_id');
            $table->date('maso');
            $table->string('noicap', 255);
            $table->date('ngaycap');
            $table->date('ngayhethan');
            $table->float('mucdong', 5, 2);
            $table->timestamps();
            $table->foreign('nhanvien_id','fk_baohiem_nhanvien_id')->references('id')->on('nhanvien')->onUpdate('CASCADE');
            $table->foreign('loaibaohiem_id','fk_baohiem_loaibaohiem_id')->references('id')->on('loaibaohiem')->onUpdate('CASCADE');
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
        Schema::table('baohiem', function(Blueprint $table)
        {
            $table->dropForeign('fk_baohiem_nhanvien_id');
            $table->dropForeign('fk_baohiem_loaibaohiem_id');
            $table->dropColumn('nhanvien_id');
            $table->dropColumn('loaibaohiem_id');
        });
        Schema::dropIfExists('baohiem');
    }
}
