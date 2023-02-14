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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->text('programming_language');
            $table->text('backend');
            $table->text('frontend');
            $table->text('database');
            $table->text('other');
            $table->text('programming_language_two');
            $table->text('backend_two');
            $table->text('frontend_two');
            $table->text('database_two');
            $table->text('other_two');
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
        Schema::dropIfExists('skills');
    }
};
