<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditFieldToDeleteTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delete', function (Blueprint $table) {
            $table->string('del_title',100)->change();
            $table->renameColumn('del_desc','del_description');
            $table->dropColumn('del_yn');
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
