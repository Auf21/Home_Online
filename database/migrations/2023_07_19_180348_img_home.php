<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('img_home',function(Blueprint $table)
        {
            $table->id();
            $table->string('img_name0');
            $table->string('img_name1');
            $table->string('img_name2');
            $table->string('img_name3');
            $table->string('img_name4');
            $table->string('img_name5');
            $table->string('img_name6');
            $table->string('img_name7');
            $table->string('img_name8');
            $table->string('img_name9');
            $table->foreignId('home_id')->constrained('homes');
        }); 
         

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
