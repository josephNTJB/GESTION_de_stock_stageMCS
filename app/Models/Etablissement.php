<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $proprio_id
 * @property string $nom
 * @property string $slug
 * @property boolean $is_active
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Stock[] $stocks
 */
class Etablissement extends Model
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
    protected $fillable = ['proprio_id', 'nom', 'slug', 'is_active', 'image', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stocks()
    {
        return $this->hasMany('App\Models\Stock', 'partenaire');
    }
}
