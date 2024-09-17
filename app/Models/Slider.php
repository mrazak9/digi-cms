<?php

namespace App\Models;

use App\Traits\CreatedUpdatedByTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedByTrait, CreatedUpdatedByTrait;

    protected $fillable = [
        'title',
        'text',
        'button_text',
        'button_url',
        'slider_photo',
        'created_by',
        'updated_by',
    ];
    public function user_create()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function user_update()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
