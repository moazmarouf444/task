<?php

namespace App\Models;

use App\Traits\ReportTrait;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,UploadTrait,ReportTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'verified_at',
        'avatar',
        'role_id',
        'is_blocked',
        'gender',
        'code',
        'lat',
        'lng',
        'address',
        'date_of_birth',
        'wallet_balance',
        'is_notify',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_notify'  => 'boolean',
        'is_blocked' => 'boolean',

    ];

    public function getAvatarAttribute()
    {
        if ($this->attributes['avatar']) {
            $image = $this->getImage($this->attributes['avatar'], 'admins');
        } else {
            $image = $this->defaultImage('admins');
        }
        return $image;
    }

    public function setAvatarAttribute($value)
    {
        if (null != $value && is_file($value)) {
            isset($this->attributes['avatar']) ? $this->deleteFile($this->attributes['avatar'], 'admins') : '';
            $this->attributes['avatar'] = $this->uploadAllTyps($value, 'admins');
        }
    }

    public function setPasswordAttribute($value)
    {
        if ($value) {
            $this->attributes['password'] = bcrypt($value);
        }
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($model) {
            $model->deleteFile($model->attributes['avatar'], 'admins');
        });

    }
    public function projects(){
        return $this->hasMany(Project::class);
    }

}
