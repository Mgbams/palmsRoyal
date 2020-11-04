<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('guest_count');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('balance_amount', 10, 2);
            $table->char('status');
            $table->decimal('paid_amount', 10, 2);
            $table->decimal('discount_percent', 5, 2)->nullable();
            $table->bigInteger('room_type_id')->unsigned();
            $table->foreign('room_type_id')->references('id')->on('room_types')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('cancelled_at')->nullable();
            $table->bigInteger('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('reservations');
    }
}
