<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Part extends Model
{
    use HasFactory;

    protected $fillable = [
        'family',
        'name',
        'name_sort_order',
        'active',
    ];

    protected $casts = [
        'name_sort_order' => 'integer',
        'active' => 'boolean',
    ];

    protected static function booted()
    {

    }

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }


}


