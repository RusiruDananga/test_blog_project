<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostsMetas extends Model
{
    protected $table = 'blog_post_metas';
    protected $guarded = [];

    use HasFactory;
}
