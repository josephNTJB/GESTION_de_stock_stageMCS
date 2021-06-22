<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagasinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magasins', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('creator_id', 191)->nullable();
            $table->string('updater_id', 191)->nullable();
            $table->bigInteger('etablissement_id')->nullable()->index('fk_magasin_etablissement');
            $table->bigInteger('partenaire_id')->nullable()->index('fk_magasin_partenaire');
            $table->bigInteger('module_id')->nullable()->index('fk_magasin_module');
            $table->string('nom', 191)->nullable();
            $table->string('slug', 191)->nullable();
            $table->unsignedInteger('display_rank')->nullable()->default(1)->comment('3e niveau sous catégories');
            $table->integer('contact_id')->nullable();
            $table->integer('ville_id')->nullable();
            $table->bigInteger('adresse_id')->nullable()->index('magasins_adresse_id_idx');
            $table->string('image', 191)->nullable();
            $table->boolean('is_master')->default(0);
            $table->text('horaires')->nullable();
            $table->text('tags')->nullable();
            $table->string('description', 191)->nullable();
            $table->boolean('is_active')->default(0);
            $table->boolean('is_available')->nullable()->default(1)->comment('disponibilité du magasin en général');
            $table->integer('base_delivery_meters')->default(1000)->comment('distance a partir de laquelle le prix par km est ajoutée');
            $table->integer('base_delivery_amount')->default(500)->comment('prix  livraison is base_meters non depassé');
            $table->unsignedInteger('base_delivery_meters_as_step_unit')->nullable()->default(1000);
            $table->integer('base_delivery_amount_per_step')->default(100)->comment('prix supplementaire par km');
            $table->integer('free_shipping_cart_amount')->nullable()->comment('ceuil panier atteint pour livraison gratuite');
            $table->integer('shipping_preparation_time')->default(40)->comment('nombre minute prepa commande');
            $table->integer('shipping_duration_max_accept_minutes')->default(30);
            $table->integer('shipping_distance_max_accept_meters')->default(10);
            $table->timestamps();
            $table->softDeletes();
            $table->index(['slug', 'nom', 'description'], 'magasins_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magasins');
    }
}
