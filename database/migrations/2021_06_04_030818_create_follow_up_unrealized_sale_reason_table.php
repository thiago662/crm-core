<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowUpUnrealizedSaleReasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow_up_unrealized_sale_reason', function (Blueprint $table) {
            $table->foreignId('follow_up_id');
            $table->foreignId('unrealized_sale_reason_id');
            $table->foreign('follow_up_id')->references('id')->on('follow_ups');
            $table->foreign('unrealized_sale_reason_id')->references('id')->on('unrealized_sale_reasons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unrealized_sale_reason_follow_ups');
    }
}
