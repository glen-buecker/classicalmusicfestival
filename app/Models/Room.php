<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel',
        'room',
        'cost',
        'sort_order'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'sort_order' => 'integer',
    ];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(hotel::class);
    }
}
