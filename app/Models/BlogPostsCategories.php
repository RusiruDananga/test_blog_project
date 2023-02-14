<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostsCategories extends Model
{
    protected $table = 'blog_post_categories';
    protected $guarded = [];

    use HasFactory;
}
