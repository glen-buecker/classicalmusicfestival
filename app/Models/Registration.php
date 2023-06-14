<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, mixed $getAuthIdentifier)
 */
class Registration extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'country',
        'passport_country',
        'primary_phone',
        'mobile_phone',
        'festival_year',
        'part_id',
        'accommodation_id',
        'group_id',
        'roommate_request',
        'arrival_date',
        'arrival_time',
        'arrival_method',
        'arrival_shuttle',
        'arrival_note',
        'departure_date',
        'departure_time',
        'departure_method',
        'departure_shuttle',
        'departure_note',
        'special_needs',
        'admin_note',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'arrival_date' => 'date',
        'departure_date' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
