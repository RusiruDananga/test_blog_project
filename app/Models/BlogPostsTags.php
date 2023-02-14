<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostsTags extends Model
{
    protected $table = 'blog_post_tags';
    protected $guarded = [];

    use HasFactory;
}
