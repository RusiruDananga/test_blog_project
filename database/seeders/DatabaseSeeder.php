<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BlogCategoriesSeeder::class,
            BlogPostCategoriesSeeder::class,
            BlogPostCommentsSeeder::class,
            BlogPostMetasSeeder::class,
            BlogPostTagsSeeder::class,
            BlogPostsSeeder::class,
            BlogTagsSeeder::class,
            UserSeeder::class,
            RolesAndPermissionsSeeder::class,
        ]);
    }
}
