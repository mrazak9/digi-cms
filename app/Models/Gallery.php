<?php

namespace App\Models;

use App\Traits\CreatedUpdatedByTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedByTrait;

    protected $fillable = [
        'post_id',
        'type',
        'content',
        'alt_text',
        'order',
        'created_by',
        'updated_by',
    ];

    /**
     * Relationship with Page model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user_create()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function user_update()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
