<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test', function (Blueprint $table) {
            $table->string('test_title');
            $table->string('test_desc')->default('这是默认描述文字');
            $table->boolean('test_yn');
            $table->text('test_text');
            $table->string('test_email')->nullable()->after('test_desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('test', function (Blueprint $table) {
            $table->dropComlumn('test_title');
            $table->dropComlumn('test_desc');
            $table->dropComlumn('test_yn');
            $table->dropComlumn('test_text');
            $table->dropComlumn('test_email');
        });
    }
}
