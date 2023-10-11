<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * /
     * */

    public function up()
        {
            Schema::create('responses', function (Blueprint $table) {
                $table->id();
                $table->string('description'); // Add the 'description' column as a string
                $table->string('points'); 
                $table->timestamps();
            });
        }

    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
