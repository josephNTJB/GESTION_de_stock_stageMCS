@extends('layouts.app', ['activePage' => 'STOCK', 'titlePage' => __('Table List')])

@section('content')
@foreach($magasins as $magasin)
<div class="content">
  <div class="container-fluid">
    <div id="{{$magasin->id}}"><div class="row">
      
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title " >{{$magasin->nom}} </h4>
            <p class="card-category">ceci est le stock du magasin {{$magasin->nom}}</p>
             <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                 options
                </button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Ajouter un produit </a>
                <a class="dropdown-item" href="#">approvisionner le stock</a>
                <a class="dropdown-item" href="#">decrementer</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                 <th>
                  id stock
                  </th>
                  <th>
                    partenaire
                  </th>
                  <th>
                    Produit concerné
                  </th>
                  <th>
                    reste de produits
                  </th>
                  <th>
                    solde du stock
                  </th>
                  <th>
                    date de refresh
                  </th>
                  <th>
                    Derniere Qte entrée
                  </th>
                </thead>
                <tbody>
                  @foreach($stock as $stockable) 
                   @if($stockable->magasin==$magasin->id)
                  <tr>
                    <td>
                    {{$stockable->id}}
                    </td>
                    <td>
                    {{$stockable->nom}}
                    </td>
                    <td>
                    {{$stockable->libelle}}
                    </td>
                    <td>
                    {{$stockable->resteProduit}}
                    </td>
                    <td>
                    {{$stockable->SoldeStock}}
                    </td>
                    <td>
                    {{$stockable->DateStock}}
                    </td>
                    <td class="text-primary">
                    {{$stockable->QteEntree}}
                    </td>
                  </tr>
                  @endif
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
</div>
@endforeach
@endsection