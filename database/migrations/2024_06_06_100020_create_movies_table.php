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
                Schema::create("movies", function (Blueprint $table) {

						$table->increments('id');
						$table->string('title',80);
						$table->integer('tmdb_id')->unique();
						$table->string('original_title',80);
						$table->string('overview',600)->nullable();
						$table->integer('release_year');
						$table->string('director',30)->nullable();
						$table->string('image1')->nullable();
						$table->string('image2')->nullable();
						$table->integer('country_id')->unsigned();
						$table->timestamps();


                    //*********************************
                    // Foreign KEY [ Uncomment if you want to use!! ]
                    //*********************************
                        // $table->foreign("director_id")->references("id")->on("directors");
                        // $table->foreign("distributor_id")->references("id")->on("distributor");
						// $table->foreign("country_id")->references("id")->on("countries");



						// ----------------------------------------------------
						// -- SELECT [movies]--
						// ----------------------------------------------------
						// $query = DB::table("movies")
						// ->leftJoin("directors","directors.id", "=", "movies.director_id")
						// ->leftJoin("countries","countries.id", "=", "movies.country_id")
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
                Schema::dropIfExists("movies");
            }
        };
    