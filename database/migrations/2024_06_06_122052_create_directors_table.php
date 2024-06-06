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
                Schema::create("directors", function (Blueprint $table) {

						$table->increments('id');
						$table->string('director',20);



						// ----------------------------------------------------
						// -- SELECT [directors]--
						// ----------------------------------------------------
						// $query = DB::table("directors")
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
                Schema::dropIfExists("directors");
            }
        };
    