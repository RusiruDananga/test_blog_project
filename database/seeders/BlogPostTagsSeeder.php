<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_post_tags')->insert([
            'id' => '1',
            'post_id' => '1',
            'tag_id' => '1',
            'created_at' => '2022-03-03 18:38:52',
            'updated_at' => '2022-03-03 18:38:52',
        ]);

        DB::table('blog_post_tags')->insert([
            'id' => '2',
            'post_id' => '1',
            'tag_id' => '3',
            'created_at' => '2022-03-03 18:38:52',
            'updated_at' => '2022-03-03 18:38:52',
        ]);
    }
}
