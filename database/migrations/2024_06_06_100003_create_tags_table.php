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
                Schema::create("tags", function (Blueprint $table) {

						$table->increments('id');
						$table->string('tag',20)->unique();
						$table->timestamps();



						// ----------------------------------------------------
						// -- SELECT [tags]--
						// ----------------------------------------------------
						// $query = DB::table("tags")
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
                Schema::dropIfExists("tags");
            }
        };
    