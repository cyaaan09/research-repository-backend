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
        Schema::create('research', function (Blueprint $table) {
            $table->id();      

            $table->foreignId('level_id')->nullable()->constrained();
            $table->foreignId('program_id')->nullable()->constrained();
            $table->foreignId('research_type_id')->nullable()->constrained();

            $table->longText('title');
            $table->date('defense_date');
            $table->date('publish_date');
            $table->string('status'); //for_defense, 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research');
    }
};
