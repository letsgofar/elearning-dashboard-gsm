<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('level_id');
            $table->foreignId('grade_id');
            $table->string('title', 191);
            $table->string('slug', 191);
            $table->text('description');
            $table->text('challenge');
            $table->string('url_video');
            $table->string('url_image');
            $table->string('url_document');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
