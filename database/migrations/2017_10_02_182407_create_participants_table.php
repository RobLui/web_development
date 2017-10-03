<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('age');
            $table->string('adress');
            $table->tinyInteger('housenumber');
            $table->string('municipality');
            $table->integer('postalcode');
            $table->string('email', 100)->unique();
            $table->string('ipadress', 45);
//            $table->integer('period_id');
//            $table->foreign('period_id')
//                    ->references('period_id')->on('periods')
//                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
