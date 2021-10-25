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
            $table->id();
            $table->foreignId('nhanvien_id')->constrained('nhanvien');
            $table->foreignId('loaibaohiem_id')->constrained('loaibaohiem');
            $table->date('maso');
            $table->string('noicap', 255);
            $table->date('ngaycap');
            $table->date('ngayhethan');
            $table->float('mucdong', 5, 2);
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
