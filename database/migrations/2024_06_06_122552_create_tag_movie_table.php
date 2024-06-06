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
                Schema::create("tag_movie", function (Blueprint $table) {

						$table->integer('tag_id')->unsigned();
						$table->integer('movie_id')->unsigned();
						//$table->foreign("tag_id")->references("id")->on("tags");
						//$table->foreign("movie_id")->references("id")->on("movies");



						// ----------------------------------------------------
						// -- SELECT [tag_movie]--
						// ----------------------------------------------------
						// $query = DB::table("tag_movie")
						// ->leftJoin("tags","tags.id", "=", "tag_movie.tag_id")
						// ->leftJoin("movies","movies.id", "=", "tag_movie.movie_id")
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
                Schema::dropIfExists("tag_movie");
            }
        };
    