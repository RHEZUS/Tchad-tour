<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ([
        'title',
        'slug',
        'desc',
        'content',
        'thumbnail',
        'category_id',
        'author_id'
    ]);

    public function tags(){
        return $this->hasMany(ArticleTag::class,'article_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id', 'id');
    }

    public function author(){
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
}
