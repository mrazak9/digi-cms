<?php

// app/Traits/CreatedUpdatedByTrait.php

namespace App\Traits;

use App\Models\User;

trait CreatedUpdatedByTrait
{
    /**
     * Boot the trait.
     *
     * @return void
     */
    public static function bootCreatedByUpdatedByTrait()
    {
        static::creating(function ($model) {
            $model->created_by = auth()->id();
        });

        static::updating(function ($model) {
            $model->updated_by = auth()->id();
        });
    }

    /**
     * Relationship with the User model for created_by.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdByUser()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Relationship with the User model for updated_by.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updatedByUser()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
