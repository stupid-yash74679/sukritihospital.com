<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCommentsModel extends Model
{
    protected $table = 'blog_comments';
    use HasFactory;
    protected $fillable = ['blog-id','name','email','comment','parent-blog-id'];
    public function blog(){
        return $this->belongsTo(BlogModel::class, 'blog-id');
    }
    public function parent(){
        return $this->belongsTo(BlogCommentsModel::class, 'parent-comment-id');
    }
    public function chindren(){
        return $this->hasMany(BlogCommentsModel::class,'parent-comment-id');
    }
}
