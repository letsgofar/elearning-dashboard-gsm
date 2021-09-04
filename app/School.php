<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function label()
    {
        return $this->belongsTo(label::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
