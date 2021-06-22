<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

      //todo : validate request data, docc laravel validate request

     if($request->validate(['NomProduit'=>'required|string|max:100', 
                             'marque'=>'required|string|max:100',
                             'logo'=>'',
                             'prixU'=>'required|numeric|min:0',
                             'description'=>'required|string|max:250',
                             'image'=>'required',
    ])){
        
        $NomProduit=request('NomProduit');
        $marque=request('marque');
        $logo=request('logo');
        $prixU=request('prixU');
        $SlugProduit=request('SlugProduit');
        $description=request('description');
        $image=request('image');
        $Produit=new Produit();
        $Produit->libelle=$NomProduit;
        $Produit->brand_name=$marque;
        $Produit->slug=$SlugProduit;
        $Produit->detail=$description;
        $Produit->image=$image;
        $Produit->brand_logo=$logo;
        $Produit->is_active=1;
        $Produit->prixUnitaire=$prixU;
        $Produit->save();
       
        return back()->with('success','le produit a été ajouté');;
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show2($mag)
    {
        $produits=DB::table('produits')->get();
        $partenaire=DB::table('etablissements')->get();
       return view('pages.nouveauStock')
       ->with(compact('produits'))
       ->with(compact('partenaire'))
       ->with(compact('mag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
