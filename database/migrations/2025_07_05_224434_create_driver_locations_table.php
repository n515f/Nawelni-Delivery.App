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
    Schema::create('driver_locations', function (Blueprint $table) {
        $table->id();
        $table->foreignId('driver_id')->constrained('drivers')->onDelete('cascade');
        $table->decimal('lat', 10, 7);
        $table->decimal('lng', 10, 7);
        $table->timestamps(); // time of last update
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_locations');
    }
};
