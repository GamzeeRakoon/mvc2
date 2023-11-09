<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class product extends Model
{
    use HasFactory;

    protected $table = 'materials';

    public function product(): BelongsTo
    {
        return $this->belongsTo(Materials::class);
    }

    protected $fillable = [
        'name',
        'supply',
        'brand',
    ];

}
