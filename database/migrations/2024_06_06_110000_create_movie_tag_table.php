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
                Schema::create("movie_tag", function (Blueprint $table) {

						$table->integer('movie_id')->unsigned();
						$table->integer('tag_id')->unsigned();
						$table->integer('user_id')->unsigned();
						$table->timestamps();
						//$table->foreign("movie_id")->references("id")->on("movies");
						//$table->foreign("tag_id")->references("id")->on("tags");



						// ----------------------------------------------------
						// -- SELECT [movie_tag]--
						// ----------------------------------------------------
						// $query = DB::table("movie_tag")
						// ->leftJoin("movies","movies.id", "=", "movie_tag.movie_id")
						// ->leftJoin("tags","tags.id", "=", "movie_tag.tag_id")
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
                Schema::dropIfExists("movie_tag");
            }
        };
    