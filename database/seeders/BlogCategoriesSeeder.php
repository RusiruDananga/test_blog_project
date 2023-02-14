<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_categories')->insert([
            'id' => '1',
            'parent_id' => '0',
            'title' => 'Category 1',
            'meta_title' => 'Category 1',
            'slug' => 'Category-1',
            'content' => 'Category 1',
            'created_at' => Null,
            'updated_at' => Null,
        ]);

        DB::table('blog_categories')->insert([
            'id' => '3',
            'parent_id' => '1',
            'title' => 'Category 2',
            'meta_title' => 'Category 2',
            'slug' => 'Category-2',
            'content' => 'Category 2',
            'created_at' => Null,
            'updated_at' => Null,
        ]);
    }
}
