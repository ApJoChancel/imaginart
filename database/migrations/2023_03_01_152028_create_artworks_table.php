<?php

use App\Models\ArtworkCategory;
use App\Models\CategoryStyle;
use App\Models\CategoryTechnic;
use App\Models\CategoryTheme;
use App\Models\User;
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
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('description');
            $table->string('picture');
            $table->unsignedInteger('artist_price');
            $table->unsignedInteger('sale_price');
            $table->string('dimension')->nullable();
            $table->string('creation_date')->nullable();
            $table->foreignIdFor(ArtworkCategory::class)->constrained();
            $table->foreignIdFor(CategoryStyle::class)->constrained();
            $table->foreignIdFor(CategoryTechnic::class)->constrained();
            $table->foreignIdFor(CategoryTheme::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artworks');
    }
};
