<?php

use App\Models\Artwork;
use App\Models\Exposure;
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
        Schema::create('artwork_exposure', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Artwork::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Exposure::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artwork_exposure');
    }
};
