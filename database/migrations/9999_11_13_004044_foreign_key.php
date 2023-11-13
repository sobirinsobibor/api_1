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
        Schema::table('users', function(Blueprint $table){
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role')->references('id')->on('roles');
        });

        Schema::table('books', function(Blueprint $table){
            $table->unsignedBigInteger('id_editor');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_book_category');

            $table->foreign('id_editor')->references('id')->on('editors');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_book_category')->references('id')->on('book_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign('id_role');
            $table->dropColumn('id_role');
        });

        Schema::table('books', function(Blueprint $table){
            $table->dropForeign('id_editor');
            $table->dropColumn('id_editor');

            $table->dropForeign('id_user');
            $table->dropColumn('id_user');

            $table->dropForeign('id_book_category');
            $table->dropColumn('id_book_category');
        });
    }
};
