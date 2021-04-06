<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    use HasFactory;

    protected $fillable = ['metric'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
