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
        Schema::create('aprentices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
             $table->string('email');
              $table->string('call_number');
               $table->string('course_id');
                $table->string('computer_id');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprentices');
    }
};
