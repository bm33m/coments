<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference', 256);
            $table->string('username', 32);
            $table->string('email', 256)->nullable();
            $table->string('topic');
            $table->text('comment');
            $table->timestamp('created')->useCurrent();
            $table->timestamp('modified')->nullable();
            $table->Integer('likes');

            $table->unique('reference', 'reference');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
