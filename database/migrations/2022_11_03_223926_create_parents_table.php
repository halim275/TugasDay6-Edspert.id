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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->string('name', 100);
            $table->string('address', 255);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('student_id')
                ->references('id')
                ->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parents');
    }
};
