<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materials extends Model
{
    use HasFactory;

    protected $table = 'materials';

    public function materials(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    protected $fillable = [
        'name',
        'supply',
        'brand',
    ];
}
