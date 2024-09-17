<?php

namespace App\Models;

use App\Traits\CreatedUpdatedByTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FooterColumn extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedByTrait;

    protected $fillable = [
        'text',
        'url',
        'order',
        'column_name',
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

    public static function getByColumnName($columnName)
    {
        return static::where('column_name', $columnName)->orderBy('order')->get();
    }
}
