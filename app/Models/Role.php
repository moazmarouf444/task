<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Role extends Model
{
    use HasTranslations;

    protected $fillable = ['name'];

    protected $translatable = ['name'];

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
}
