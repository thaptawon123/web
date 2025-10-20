<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasFactory, HasRoles;
    protected $fillable = ['name','email','password'];
    protected $hidden = ['password'];
    protected $guard_name = 'admin';

    /**
     * Always hash the password when setting it (idempotent if already hashed).
     */
    public function setPasswordAttribute($value): void
    {
        if (empty($value)) {
            $this->attributes['password'] = $value;
            return;
        }

        // If looks like a bcrypt hash already, keep as is; otherwise hash.
        if (is_string($value) && str_starts_with($value, '$2y$')) {
            $this->attributes['password'] = $value;
        } else {
            $this->attributes['password'] = Hash::make($value);
        }
    }
}
