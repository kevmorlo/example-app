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
        Schema::create('mines', function (Blueprint $table) {
            $table->id();
            $table->string("name", 75);
            $table->decimal("latitude", 15,12);
            $table->decimal("longitude", 15,12);
            $table->bigInteger("concession_id");
            $table->timestamps();
            $table->foreign('concession_id')->references('id')->on('concession');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mines');
    }
};
