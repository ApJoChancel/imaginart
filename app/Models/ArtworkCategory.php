<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ArtworkCategory extends Model
{
    use HasFactory;

    public function artworks(): HasMany
    {
        return $this->hasMany(Artwork::class);
    }

    public function styles(): HasMany
    {
        return $this->hasMany(CategoryStyle::class);
    }

    public function technics(): HasMany
    {
        return $this->hasMany(CategoryTechnic::class);
    }

    public function themes(): HasMany
    {
        return $this->hasMany(CategoryTheme::class);
    }
}
