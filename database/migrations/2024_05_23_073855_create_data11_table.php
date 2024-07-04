<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data11', function (Blueprint $table) {
            $table->id();
            $table->integer('end_year')->nullable()->default(0);
            $table->integer('intensity')->nullable()->default(0);
            $table->string('sector')->nullable()->default('N/A');
            $table->string('topic')->nullable()->default('N/A');
            $table->text('insight')->nullable()->default('N/A');
            $table->text('swot')->nullable()->default('N/A');
            $table->string('url')->nullable()->default('N/A');
            $table->text('region')->nullable()->default('N/A');
            $table->integer('start_year')->nullable()->default(0);
            $table->integer('impact')->nullable()->default(0);
            $table->timestamp('added')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('published')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('city')->nullable()->default('N/A');
            $table->text('country')->nullable()->default('N/A');
            $table->integer('relevance')->nullable()->default(0);
            $table->text('pestle')->nullable()->default('N/A');
            $table->text('source')->nullable()->default('N/A');
            $table->string('title')->nullable()->default('N/A');
            $table->integer('likelihood')->nullable()->default(0);
            // Add more columns as needed
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
        Schema::dropIfExists('data11');
    }
};
