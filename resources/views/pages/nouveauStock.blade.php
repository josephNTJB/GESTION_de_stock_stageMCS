@extends('layouts.app', ['activePage' => 'PRODUITS', 'titlePage' => __('Typography')])

@section('content')

<div class="content">
  <div class="container-fluid">
  <div class="row">
      
   <div class="col-lg-12 col-md-6 col-sm-6">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title">NOUVEAU STOCK</h4>
        <p class="card-category">choisisez un produit pour en creer le stock</p>
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
                    partenaire
                  </th>
                  <th>
                    quantité/validation
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
                    <form  action='/stock-list2/{mag}/nouveauStock/ajout' method='POST'>
                        @csrf
                    <select name="partenaire" aria-placeholder="partenaire" class="btn btn-outline-warning">
                    @foreach($partenaire as $Partenaire)
                    <option value="{{$Partenaire->id}}">{{$Partenaire->nom}}</option>
                    @endforeach
                    </select>
                    </td>
                    <td class="text-primary">
                    <input type="number" name="quantite" min=1 required=true width="10%"/><input type="submit" value="ok" class="btn btn-success">
                    </td>
                    <input type=hidden name="produit" value='{{$produit->id}}'/>
                    <input type=hidden name="magasin" value='{{$mag}}'/>
                    </form>
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
       </div>
       </div>
    </div>
</div>
</div>
</div>

@endsection