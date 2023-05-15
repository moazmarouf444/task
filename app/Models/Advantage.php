<?php

namespace App\Models;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Advantage extends Model
{
    const IMAGEPATH = 'advantages' ;

    use HasFactory,HasTranslations,UploadTrait;
    protected $fillable = [
        'title',
        'image',
    ];

    protected array $translatable = [
        'title',
    ];

    public function getImageAttribute()
    {
        if ($this->attributes['image']) {
            $image = $this->getImage($this->attributes['image'], 'advantages');
        } else {
            $image = $this->defaultImage('advantages');
        }
        return $image;
    }

    public function setImageAttribute($value)
    {
        if (null != $value && is_file($value)) {
            isset($this->attributes['image']) ? $this->deleteFile($this->attributes['image'], 'advantages') : '';
            $this->attributes['image'] = $this->uploadAllTyps($value, 'advantages');
        }
    }
    public static function boot() {
        parent::boot();
        /* creating, created, updating, updated, deleting, deleted, forceDeleted, restored */

        static::deleted(function($model) {
            $model->deleteFile($model->attributes['image'], 'advantages');
        });

    }

}
