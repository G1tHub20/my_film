<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    return new class extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("genre_movie", function (Blueprint $table) {

						$table->integer('genre_id')->unsigned();
						$table->integer('movie_id')->unsigned();
						$table->timestamps();
						//$table->foreign("genre_id")->references("id")->on("genres");
						//$table->foreign("movie_id")->references("id")->on("movies");



						// ----------------------------------------------------
						// -- SELECT [genre_movie]--
						// ----------------------------------------------------
						// $query = DB::table("genre_movie")
						// ->leftJoin("genres","genres.id", "=", "genre_movie.genre_id")
						// ->leftJoin("movies","movies.id", "=", "genre_movie.movie_id")
						// ->get();
						// dd($query); //For checking



                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("genre_movie");
            }
        };
    