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
       Schema::table('homes', function (Blueprint $table) {

          
            $table->id()->unique();
            $table->string('address');
            $table->integer('price');
            $table->timestamps();
            $table->string('info_position');
            $table->string('room_no');
            $table->string('area');
            $table->string('discribtion');
            $table->string('condition');
            $table->string('floor');
            $table->string('cladding'); //الاكساء
            $table->string('bathroom_no'); 
            $table->string('brdroom_no'); 
            $table->boolean('carage');
            $table->foreignId('user_id')->constrained('users');
            

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
