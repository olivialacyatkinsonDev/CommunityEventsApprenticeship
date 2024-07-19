<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'photo',
        'start_date_time',
        'building_number',
        'street',
        'building_name',
        'postal_code',
        'city',
        'county',
        'country',
        'phone',
        'email',
        'is_online',
        'user_id',
    ];

    // a event model belongs to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
