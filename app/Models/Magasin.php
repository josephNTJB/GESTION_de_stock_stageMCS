<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $creator_id
 * @property string $updater_id
 * @property integer $etablissement_id
 * @property integer $partenaire_id
 * @property integer $module_id
 * @property string $nom
 * @property string $slug
 * @property int $display_rank
 * @property int $contact_id
 * @property int $ville_id
 * @property integer $adresse_id
 * @property string $image
 * @property boolean $is_master
 * @property string $horaires
 * @property string $tags
 * @property string $description
 * @property boolean $is_active
 * @property boolean $is_available
 * @property int $base_delivery_meters
 * @property int $base_delivery_amount
 * @property int $base_delivery_meters_as_step_unit
 * @property int $base_delivery_amount_per_step
 * @property int $free_shipping_cart_amount
 * @property int $shipping_preparation_time
 * @property int $shipping_duration_max_accept_minutes
 * @property int $shipping_distance_max_accept_meters
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Stock[] $stocks
 */
class Magasin extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['creator_id', 'updater_id', 'etablissement_id', 'partenaire_id', 'module_id', 'nom', 'slug', 'display_rank', 'contact_id', 'ville_id', 'adresse_id', 'image', 'is_master', 'horaires', 'tags', 'description', 'is_active', 'is_available', 'base_delivery_meters', 'base_delivery_amount', 'base_delivery_meters_as_step_unit', 'base_delivery_amount_per_step', 'free_shipping_cart_amount', 'shipping_preparation_time', 'shipping_duration_max_accept_minutes', 'shipping_distance_max_accept_meters', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stocks()
    {
        return $this->hasMany('App\Models\Stock', 'magasin');
    }
}
