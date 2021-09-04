<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $table = 'labels';
    public function schools()
    {
        return $this->hasMany(School::class, 'label_id');
    }
}
