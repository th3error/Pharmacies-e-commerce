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
        Schema::table('pharmacy_product', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('pharmacy_id')->references('id')->on('pharmacies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pharmacy_product', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['pharmacy_id']);
        });
    }
};
