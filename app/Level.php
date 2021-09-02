<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
