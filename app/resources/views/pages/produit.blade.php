@extends('layouts.app', ['activePage' => 'PRODUITS', 'titlePage' => __('Typography')])

@section('content')

<div class="content">
  <div class="container-fluid">
  <div class="row">
      
   <div class="col-lg-8 col-md-6 col-sm-6">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">produits</h4>
        <p class="card-category">liste des produits dont le stock peut etre géré</p>
      </div>
      <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    id
                  </th>
                  <th>
                    libellé
                  </th>
                  <th>
                    description
                  </th>
                  <th>
                    tags
                  </th>
                  <th>
                    est actif
                  </th>
                </thead>
                <tbody>
                  @foreach($produits as $produit)
                  <tr>
                    <td>
                    {{$produit->id}}
                    </td>
                    <td>
                    {{$produit->libelle}}
                    </td>
                    <td>
                    {{$produit->detail}}
                    </td>
                    <td>
                    {{$produit->tags}}
                    </td>
                    <td class="text-primary">
                    {{ ($produit->is_active==1)? 'oui':'non'}}
                    </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
       </div>
       </div>
    </div>
<div class="col-lg-4 " >
  <div class="card">
      <div class="">
       <form class=" d-lg-block w-28 mt-0 ml-5 mr-5 mb-5" action="" method="POST">
       @csrf
       <div class="card-header card-header-primary">
       <h4>NOUVEAU PRODUIT</h4><br>
       </div>
       <table>
       <tr>
       <td><h4>Nom du produit</h4></td>
       <td><input type =text name="NomProduit" placeholder="LIBELLE" class="form-control"></td>
       </tr>
       <tr>
       <td><h4>Marque </h4> </td>
       <td><input type =text name="marque" placeholder="BRAND name" class="form-control"></td>
       </tr>
       <td><h4>SLUG </h4></td>
       <td><input type =text name="SlugProduit" placeholder="SLUG" class="form-control"></td>
       <tr>
       <td><h4>AJOUTER DESCRIPTION </h4></td>
       <td><textarea name=description class="form-control"></textarea><br></td>
       </tr>
       <tr >
       <td colspan="2" ><br><label class="label"><h4 class=" float-center">AJOUTEZ UNE image</h4> </label><br>
       <input type="file" class="btn" name="image" accept="image/*" capture> 
       </tr>
       </table><br>
       <input type="submit" value="AJOUTER" class="float-right btn btn-primary  " >
       </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!--<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
       <form class=" d-lg-block w-25 mx-auto" action="/connexion" method="post">
       <caption><h2>AJOUTER LE PRODUIT</caption></h3><br>
       <table>
       <tr>
       <td><label class="label"><h4>Nom du produit</h4>  </label></td>
       <td><input type =text name="NomProduit" placeholder="LIBELLE"></td>
       </tr>
       <tr>
       <td><label class="label"><h4>Marque </h4> </label></td>
       <td><input type =text name="marque" placeholder="BRAND name"></td>
       </tr>
       <td><label class="label"><h4>SLUG </h4> </label></td>
       <td><input type =text name="SlugProduit" placeholder="SLUG"></td>
       <tr>
       <td><label class="label"><h4>AJOUTER DESCRIPTION </h4></label></td>
       <td><textarea name=description></textarea><br></td>
       </tr>
       <tr >
       <td colspan="2" ><br><label class="label"><h4 class=" float-center">AJOUTEZ UNE image</h4> </label><br>
       <input type="file" name="image" accept="image/*" capture> 
       </tr>
       </table><br>
       <input type="submit" value="AJOUTER" class="float-right  ">
       </form>
      </div>
    </div>
  </div>
</div>
-->
@endsection