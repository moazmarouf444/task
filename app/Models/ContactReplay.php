<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactReplay extends Model
{
    use HasFactory;
    protected $fillable = ['replay','replayer_id','replayer_type' , 'contact_id'];

    public function replayer()
    {
        return $this->morphTo();
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id', 'id');
    }

}
