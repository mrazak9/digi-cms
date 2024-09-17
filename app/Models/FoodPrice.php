<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodPrice extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'unit', 'current_price', 'previous_price', 'noted'];
}
