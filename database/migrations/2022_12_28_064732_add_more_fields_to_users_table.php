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
    Schema::table('users', function (Blueprint $table) {
      $table->string('card_type');
      $table->date('dob')->nullable()->default(null);
      $table->string('state')->nullable()->default(null);
      $table->string('district')->nullable()->default(null);
      $table->string('phone')->nullable()->default(null);
      $table->string('waphone')->nullable()->default(null);
      $table->text('address')->nullable()->default(null);
      $table->string('pincode')->nullable()->default(null);
      $table->string('gender')->nullable()->default(null);
      $table->string('father_name')->nullable()->default(null);
      $table->string('qualification')->nullable()->default(null);
      $table->string('aadhar_number')->nullable()->default(null);
      $table->string('id_type')->nullable()->default(null);
      $table->string(
        'profile_picture'
      )->nullable()->default(null);
      $table->string(
        'marksheet_front_img'
      )->nullable()->default(null);
      $table->string(
        'id_card_front_img'
      )->nullable()->default(null);
      $table->string(
        'id_card_back_img'
      )->nullable()->default(null);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('users', function (Blueprint $table) {
      //
    });
  }
};
