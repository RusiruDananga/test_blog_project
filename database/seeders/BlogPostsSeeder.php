<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_posts')->insert([
            'id' => '1',
            'author_id' => '25',
            'parent_id' => '0',
            'title' => 'Vehicle Rental Service For House Movers in Colombo',
            'meta_title' => 'Vehicle Rental Service For House Movers in Colombo',
            'slug' => 'Vehicle-Rental-Service-For-House-Movers-in-Colombo',
            'summary' => 'Vehicle Rental Service For House Movers in Colombo',
            'published' => Null,
            'content' => 'Vehicle Rental Service For House Movers in Colombo',
            'published_at' => '2022-03-04 00:08:52',
            'created_at' => '2022-03-03 18:38:52',
            'updated_at' => '2022-03-03 18:38:52',
        ]);
    }
}
