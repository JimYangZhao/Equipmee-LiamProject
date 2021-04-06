<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_name'];

    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }

    public function metrics()
    {
        return $this->hasMany(Metric::class);
    }
}
