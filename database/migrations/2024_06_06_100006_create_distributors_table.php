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
                Schema::create("distributors", function (Blueprint $table) {

						$table->increments('id');
						$table->string('distributor',20);
						$table->timestamps();



						// ----------------------------------------------------
						// -- SELECT [distributors]--
						// ----------------------------------------------------
						// $query = DB::table("distributors")
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
                Schema::dropIfExists("distributors");
            }
        };
    