<?php

namespace App\Http\Controllers;

use App\Models\log_activities;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Type\Integer;
use App\Models\Magasin;
use App\Models\Produit;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock=Stock::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mag=(int)request('magasin');
        $stock=new Stock();
        $Produit=Produit::find(request('produit'));
        $stock->produit=request('produit');
        $stock->resteProduit=request('quantite');
        $stock->magasin=request('magasin');
        $stock->QteEntree=request('quantite');
        $stock->DateStock=now();
        $stock->SoldeStock=$Produit->prixUnitaire*request('quantite');
        $stock->partenaire=request('partenaire');
        $stock->save();
        
        return redirect("stock-list2/$mag")->with('success','le stock a été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $stock=DB::table('stock')
        ->selectRaw('stock.id as ids,etablissements.nom,stock.magasin,
        produits.libelle,stock.resteProduit,stock.SoldeStock,stock.DateStock,stock.QteEntree'
       )->join('produits', 'produits.id', '=', 'stock.produit')
		->join('etablissements', 'etablissements.id', '=', 'stock.partenaire')
		->where('stock.resteProduit', '>', 0)
		->get();
		$magasins=DB::table('magasins')->get();
		return view('pages.stock_list')
          ->with(compact('magasins'))
		  ->with(compact('stock'));

    }
    public function show2(int $mag)
    {   
        $stock=DB::table('stock')
        ->selectRaw('stock.id as id,etablissements.nom,stock.magasin,
        produits.libelle,stock.resteProduit,stock.SoldeStock,stock.DateStock,stock.QteEntree'
       )->join('produits', 'produits.id', '=', 'stock.produit')
		->join('etablissements', 'etablissements.id', '=', 'stock.partenaire')
		->where('stock.resteProduit', '>', 0)
		->get();
		$magasin=Magasin::find($mag);
		return view('pages.stockParMagasin')
          ->with(compact('magasin'))
		  ->with(compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $increm=request('nombreincrem');
        $decrem=request('nombredecrem');
        /*$user=User::find(1);*/
        //on remplit les données du stock à incrementer
        if(isset($increm)){
        $id=request('id'); 
     if($request->validate(['nombreincrem'=>'required|Integer|Min:1',])){
       $stock=Stock::find($id);
       $stock->resteProduit=$stock->resteProduit + $increm;
      $stock->QteEntree=$increm;
      $stock->DateStock=now();
      $stock->save();
       //on sauvegarde l'activité
      /* $log->subject=$user->name;
       $log->action='a ajouté le stock'.$stock->id;*/

     return back();
          }
       }
       if(isset($decrem)){
        $id=request('id'); 
     if($request->validate(['nombredecrem'=>'required|Integer|Min:1',])){
       $stock=Stock::find($id);
       $stock->resteProduit=$stock->resteProduit - $decrem;
      $stock->DateStock=now();
      $stock->save();
     return back();
          }
       }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
