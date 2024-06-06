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
                Schema::create("reviews", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('movie_id')->unsigned();
						$table->integer('user_id')->unsigned();
						$table->string('review',300)->nullable();
						$table->integer('rating');
						$table->timestamps();
						//$table->foreign("movie_id")->references("id")->on("movies");
						//$table->foreign("user_id")->references("id")->on("users");



						// ----------------------------------------------------
						// -- SELECT [reviews]--
						// ----------------------------------------------------
						// $query = DB::table("reviews")
						// ->leftJoin("movies","movies.id", "=", "reviews.movie_id")
						// ->leftJoin("users","users.id", "=", "reviews.user_id")
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
                Schema::dropIfExists("reviews");
            }
        };
    