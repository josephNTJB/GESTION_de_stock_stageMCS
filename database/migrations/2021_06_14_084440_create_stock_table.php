<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('partenaire')->index('partenaire');
            $table->bigInteger('magasin')->index('magasin');
            $table->integer('resteProduit');
            $table->integer('QteEntree');
            $table->double('SoldeStock');
            $table->date('DateStock');
            $table->bigInteger('produit')->index('produit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock');
    }
}
