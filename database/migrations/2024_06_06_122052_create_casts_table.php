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
                Schema::create("casts", function (Blueprint $table) {

						$table->increments('id');
						$table->string('cast',20);



						// ----------------------------------------------------
						// -- SELECT [casts]--
						// ----------------------------------------------------
						// $query = DB::table("casts")
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
                Schema::dropIfExists("casts");
            }
        };
    