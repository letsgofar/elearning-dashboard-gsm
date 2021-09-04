<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function schools()
    {
        return $this->hasMany(School::class);
    }
}
