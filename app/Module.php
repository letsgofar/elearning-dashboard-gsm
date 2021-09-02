<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';
    protected $fillable = ['category_id', 'level_id', 'grade_id', 'title', 'slug', 'description', 'challenge', 'url_video', 'url_image', 'url_document'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function level()
    {
        return $this->belongsTo(level::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
