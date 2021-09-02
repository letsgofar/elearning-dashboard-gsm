<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
