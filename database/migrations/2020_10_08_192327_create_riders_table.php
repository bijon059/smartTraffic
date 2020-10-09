<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riders', function (Blueprint $table) {
            $table->id();
            $table->string('rfid');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable();
            $table->string('mobile');
            $table->string('password');
            $table->string('image');
            $table->string('driving_license_no');
            $table->date('driving_license_validity');
            $table->string('vehicle_license_no');
            $table->date('vehicle_validity');
            $table->string('insurance_no');
            $table->date('insurance_validity');
            $table->string('engine_no');
            $table->string('chesis_no');
            $table->integer('nid_no');
            $table->date('last_checking_time');
            $table->bigInteger('case_id')->unsigned();
            $table->foreign('case_id')->references('id')->on('cases');
            $table->bigInteger('traffic_id')->unsigned();
            $table->foreign('traffic_id')->references('id')->on('traffics');
            $table->boolean('check_status');
            $table->string('address')->nullable();
            $table->boolean('case_status');
            $table->date('case_issue_date');
            $table->date('case_expiry_date');

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
        Schema::dropIfExists('riders');
    }
}
