<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail')->nullable();
            $table->foreignId('grade_id');
            $table->foreignId('status_id');
            $table->foreignId('label_id');
            $table->string('npsn', 8);
            $table->string('nama', 191);
            $table->string('slug', 191);
            $table->text('alamat');
            $table->text('kecamatan');
            $table->text('kabupaten');
            $table->text('provinsi');
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
        Schema::dropIfExists('schools');
    }
}
