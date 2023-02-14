<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_tags')->insert([
            'id' => '1',
            'title' => 'Tag 1',
            'meta_title' => 'Tag-1',
            'slug' => 'Tag 1',
            'content' => Null,
            'created_at' => '2022-03-03 06:14:47',
            'updated_at' => '2022-03-03 06:14:47',
        ]);

        DB::table('blog_tags')->insert([
            'id' => '3',
            'title' => 'Tag 2',
            'meta_title' => 'Tag-2',
            'slug' => 'Tag 2',
            'content' => Null,
            'created_at' => '2022-03-03 06:14:47',
            'updated_at' => '2022-03-03 06:14:47',
        ]);
    }
}
