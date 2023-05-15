<?php

namespace App\Models;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory,UploadTrait;
    const IMAGEPATH = 'socials' ;

    use HasFactory;

    protected $fillable = [
        'image',
        'link',
    ];

    public function getImageAttribute()
    {
        if ($this->attributes['image']) {
            $image = $this->getImage($this->attributes['image'], 'socials');
        } else {
            $image = $this->defaultImage('socials');
        }
        return $image;
    }

    public function setImageAttribute($value)
    {
        if (null != $value && is_file($value)) {
            isset($this->attributes['image']) ? $this->deleteFile($this->attributes['image'], 'socials') : '';
            $this->attributes['image'] = $this->uploadAllTyps($value, 'socials');
        }
    }
}
