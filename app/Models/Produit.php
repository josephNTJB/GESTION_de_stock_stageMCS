<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $uid
 * @property string $libelle
 * @property string $slug
 * @property string $detail
 * @property float $prixUnitaire
 * @property string $brand_name
 * @property string $brand_logo
 * @property string $horaires
 * @property string $tags
 * @property int $type
 * @property string $image
 * @property boolean $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Stock[] $stocks
 */
class Produit extends Model
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
    protected $fillable = ['uid', 'libelle', 'slug', 'detail', 'prixUnitaire', 'brand_name', 'brand_logo', 'horaires', 'tags', 'type', 'image', 'is_active', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stocks()
    {
        return $this->hasMany('App\Models\Stock', 'produit');
    }
}
