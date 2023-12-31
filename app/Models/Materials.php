<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Materials extends Model
{
    use HasFactory;

    protected $table = 'materials';

    public function materialsBelong(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function materialsHas(): HasMany
    {
        return $this->hasMany(product::class);
    }

    protected $fillable = [
        'name',
        'supply',
        'brand',
    ];
}
