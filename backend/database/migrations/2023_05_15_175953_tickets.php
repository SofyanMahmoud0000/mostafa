<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('resolved')->default(false);

            $table->unsignedBigInteger("driver_id");
            $table->unsignedBigInteger("provider_id");
            $table->unsignedBigInteger("workshop_id");
            $table->unsignedBigInteger("reason_id");

            $table->foreign("driver_id")->references("id")->on("drivers")->onDelete("cascade");
            $table->foreign("reason_id")->references("id")->on("reasons")->onDelete("cascade");
            $table->foreign("provider_id")->references("id")->on("providers")->onDelete("cascade");
            $table->foreign("workshop_id")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
