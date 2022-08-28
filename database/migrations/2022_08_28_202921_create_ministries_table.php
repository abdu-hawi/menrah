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
        Schema::create('ministries', function (Blueprint $table) {
            $table->increments('CASE_NO');
            $table->string('DIVISION_NAME');
            $table->string('RECEIVE_DIVISION_NAME');
            $table->string('REG_DATE');
            $table->string('REFERRAL_STATUS_DATE');
            $table->string('SEND_DIVISION_NAME');
            $table->string('SESSION_DATE_FIRST')->nullable();
            $table->string('SESSIONS_INSDAT_FIRST')->nullable();
            $table->string('DEFENDANT');
            $table->string('PLAINTIFFS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ministries');
    }
};
