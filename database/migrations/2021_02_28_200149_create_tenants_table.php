<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('building_section');
            $table->integer('floor_section');
            $table->integer('unit_section');
            $table->string('tanant_name');
            $table->integer('tanant_number');
            $table->string('tanant_email');
            $table->integer('unit_rental_amount');
            $table->string('rental_type');
            $table->integer('start_date');
            $table->integer('end_date');
            $table->integer('no_of_payment');
            $table->integer('payment_dates');
            $table->string('types_of_deposit');
            $table->integer('deposit_amount');
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
        Schema::dropIfExists('tenants');
    }
}
