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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('web_name');
            $table->text('technology_one');
            $table->string('technology_two');
            $table->text('description');
            $table->string('status');
            $table->string('web_link')->nullable();
            $table->string('web_repo')->nullable();
            $table->string('img_url');
            $table->string('poster');
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
        Schema::dropIfExists('portfolios');
    }
};
