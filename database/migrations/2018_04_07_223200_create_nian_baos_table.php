<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNianBaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nian_baos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->string('regnum', 20)->comment('注册号');
            $table->string('corpname')->comment('字号');
            $table->string('rep_person');
            $table->string('phone')->comment('登记电话');
            $table->string('contact_person');
            $table->string('contact_phone');
            $table->string('nian_bao_status')->nullable();
            $table->dateTime('upload_date_time')->comment('年报时间')->nullable();
            $table->string('nei_wai_zi')->comment('内外资')->nullable();
            $table->string('beizhu')->nullable();
            $table->string('dian_lian')->nullable();
            $table->string('division', 8)->nullable();
            $table->string('duan_guan_yuan', 5)->nullable();
            $table->string('desinated_person')->nullable();
            $table->string('status')->nullable();
            $table->string('phone_result', 5)->nullable();
            $table->string('contact_phone_result', 5)->nullable();
            $table->primary('regnum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nian_baos');
    }
}
