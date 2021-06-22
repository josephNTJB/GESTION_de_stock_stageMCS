<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $partenaire
 * @property integer $magasin
 * @property integer $produit
 * @property int $resteProduit
 * @property int $QteEntree
 * @property float $SoldeStock
 * @property string $DateStock
 * @property Magasin $magasin
 * @property Produit $produit
 * @property Etablissement $etablissement
 */

class Stock extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'stock';

    public $timestamps = false;
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['partenaire', 'magasin', 'produit', 'resteProduit', 'QteEntree', 'SoldeStock', 'DateStock'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function magasin()
    {
        return $this->belongsTo('App\Models\Magasin', 'magasin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produit()
    {
        return $this->belongsTo('App\Models\Produit', 'produit');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etablissement()
    {
        return $this->belongsTo('App\Models\Etablissement', 'partenaire');
    }
}
