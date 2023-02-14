<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostsComments extends Model
{
    protected $table = 'blog_post_comments';
    protected $guarded = [];

    use HasFactory;
}
