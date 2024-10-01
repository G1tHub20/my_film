<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            CountrySeeder::class,
            GenreSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            MovieSeeder::class,
            GenreMovieSeeder::class,
            MovieTagSeeder::class,
            ReviewSeeder::class,
        ]);

        // ○○TableSeederは削除する
        // $this->call(ReviewsTableSeeder::class);
        // $this->call(MovieTagTableSeeder::class);
        // $this->call(TagsTableSeeder::class);
    }
}
