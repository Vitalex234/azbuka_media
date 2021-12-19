<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePagesAddOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->string('keywords')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->unsignedTinyInteger('order')->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('title')->nullable(false)->change();
            $table->string('keywords')->nullable(false)->change();
            $table->string('description')->nullable(false)->change();
            $table->dropColumn('order');
        });
    }
}
