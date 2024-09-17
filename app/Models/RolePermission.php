<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'role_page_id',
        'access_status',
    ];

    /**
     * Relationship with the Role model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Relationship with the RolePage model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rolePage()
    {
        return $this->belongsTo(RolePage::class);
    }
}
