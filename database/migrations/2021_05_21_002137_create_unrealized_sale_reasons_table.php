<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnrealizedSaleReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unrealized_sale_reasons', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->boolean('status');
            $table->foreignId('account_id');
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unrealized_sale_reasons');
    }
}
