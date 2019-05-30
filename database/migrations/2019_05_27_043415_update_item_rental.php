<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateItemRental extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item_rental', function (Blueprint $table) {
            $table->unsignedBigInteger('rental_id');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('inventory');

            //foreign keys
            $table->foreign('item_id')
            ->references('id')
            ->on('items')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('rental_id')
            ->references('id')
            ->on('rentals')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_rental', function (Blueprint $table) {
            //
        });
    }
}
