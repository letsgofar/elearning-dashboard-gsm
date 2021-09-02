<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
