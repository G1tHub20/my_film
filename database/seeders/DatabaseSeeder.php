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
            // CastSeeder::class,
            CountrySeeder::class,
            // DirectorSeeder::class,
            // DistributorSeeder::class,
            GenreSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            MovieSeeder::class,
            // CastMovieSeeder::class,
            GenreMovieSeeder::class,
            MovieTagSeeder::class,
            ReviewSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(MoviesTableSeeder::class);
        // $this->call(GenreMovieTableSeeder::class);

        // ○○TableSeederは削除する
        // $this->call(ReviewsTableSeeder::class);
        // $this->call(MovieTagTableSeeder::class);
    }
}
