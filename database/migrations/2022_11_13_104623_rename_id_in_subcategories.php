<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('subcategories', function (Blueprint $table) {
        //     $table->renameColumn('id','sub_cate_id');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('subcategories', function (Blueprint $table) {
        //     $table->renameColumn('sub_cate_id','id');
        // });
    }
};