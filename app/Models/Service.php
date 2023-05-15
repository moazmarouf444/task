<?php

namespace App\Models;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    const IMAGEPATH = 'services' ;

    use HasFactory, HasTranslations,UploadTrait;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    protected array $translatable = [
        'title',
        'description'
    ];

    public function getImageAttribute()
    {
        if ($this->attributes['image']) {
            $image = $this->getImage($this->attributes['image'], 'services');
        } else {
            $image = $this->defaultImage('services');
        }
        return $image;
    }

    public function setImageAttribute($value)
    {
        if (null != $value && is_file($value)) {
            isset($this->attributes['image']) ? $this->deleteFile($this->attributes['image'], 'services') : '';
            $this->attributes['image'] = $this->uploadAllTyps($value, 'services');
        }
    }

}
