<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title_uz', 'title_ru', 'body_uz','body_ru', 'meta_title', 'meta_description', 'meta_keywords', 'image', 'slug', 'view', 'is_special'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(tag::class);
    }

}
