<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleTag extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ([
        'article_id',
        'tag_id'
    ]);
    public function article()
    {
        return $this->belongsTo(Article::class, "article_id", "id");
    }

    public function tag(){
        return $this->belongsTo(Tag::class, "tag_id", "id");
    }
}
