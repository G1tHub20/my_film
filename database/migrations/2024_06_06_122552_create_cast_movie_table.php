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
                Schema::create("cast_movie", function (Blueprint $table) {

						$table->integer('cast_id')->unsigned();
						$table->integer('movie_id')->unsigned();
						//$table->foreign("cast_id")->references("id")->on("casts");
						//$table->foreign("movie_id")->references("id")->on("movies");



						// ----------------------------------------------------
						// -- SELECT [cast_movie]--
						// ----------------------------------------------------
						// $query = DB::table("cast_movie")
						// ->leftJoin("casts","casts.id", "=", "cast_movie.cast_id")
						// ->leftJoin("movies","movies.id", "=", "cast_movie.movie_id")
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
                Schema::dropIfExists("cast_movie");
            }
        };
    