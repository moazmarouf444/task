<?php

namespace App\Models;

use App\Traits\ReportTrait;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory,UploadTrait,ReportTrait,SoftDeletes;
    protected $date = ['delete_at'];
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'avatar',
        'role_id',
        'is_notify',
        'is_blocked',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'is_notify'  => 'boolean',
        'is_blocked' => 'boolean',
    ];

    public function getAvatarAttribute() {
        if ($this->attributes['avatar']) {
            $image = $this->getImage($this->attributes['avatar'], 'admins');
        } else {
            $image = $this->defaultImage('admins');
        }
        return $image;
    }

    public function setAvatarAttribute($value) {
        if (null != $value && is_file($value) ) {
            isset($this->attributes['avatar']) ? $this->deleteFile($this->attributes['avatar'] , 'admins') : '';
            $this->attributes['avatar'] = $this->uploadAllTyps($value, 'admins');
        }
    }

    public function setPasswordAttribute($value) {
        if ($value) {
            $this->attributes['password'] = bcrypt($value);
        }
    }

    public static function boot() {
        parent::boot();
        /* creating, created, updating, updated, deleting, deleted, forceDeleted, restored */

        static::deleted(function($model) {
            $model->deleteFile($model->attributes['avatar'], 'admins');
        });

    }
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    public function replays() {
        return $this->morphMany(ContactReplay::class, 'replayer');
    }

}
