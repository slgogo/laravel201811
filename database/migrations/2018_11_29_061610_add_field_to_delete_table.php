<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToDeleteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delete', function (Blueprint $table) {
            $table->string('del_title');
            $table->string('del_desc')->default('这是默认描述文字');
            $table->boolean('del_yn');
            $table->text('del_text');
            $table->time('del_time');
            $table->string('del_email')->nullable()->after('del_desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delete', function (Blueprint $table) {
            //
        });
    }
}
