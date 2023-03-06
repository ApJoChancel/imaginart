<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Exposure extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function artworks(): BelongsToMany
    {
        return $this->belongsToMany(Artwork::class);
    }
}
