<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'make', 'content', 
        'image', 'daily_rate', 
        'user_id', 'weekly_rate', 'monthly_rate', 
        'location_name', 'quantity', 'year', 'model', 
        'metric', 'location_id', 'category_id',
        'from', 'to'
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->orderBy('name');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
