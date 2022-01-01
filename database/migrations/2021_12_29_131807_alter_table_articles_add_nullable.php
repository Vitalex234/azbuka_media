<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableArticlesAddNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->string('image')->nullable()->change();
            $table->text('short_desc')->nullable()->change();
            $table->string('image_thumb')->nullable()->change();
            $table->text('full_content')->nullable()->change();
            $table->string('source_url')->nullable()->change();
            $table->string('alias')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('title')->nullable(false)->change();
            $table->string('image')->nullable(false)->change();
            $table->text('short_desc')->nullable(false)->change();
            $table->string('image_thumb')->nullable(false)->change();
            $table->text('full_content')->nullable(false)->change();
            $table->string('source_url')->nullable(false)->change();
            $table->string('alias')->nullable(false)->change();
        });
    }
}
