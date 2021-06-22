<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('produits', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('uid', 191)->nullable();
            $table->string('libelle', 191);
            $table->string('slug', 191);
            $table->text('detail')->nullable();
            $table->string('brand_name', 191)->nullable();
            $table->string('brand_logo', 191)->nullable();
            $table->text('horaires')->nullable();
            $table->string('tags', 191)->nullable();
            $table->integer('type')->default(0);
            $table->string('image', 191)->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['libelle', 'detail'], 'produits_index');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
