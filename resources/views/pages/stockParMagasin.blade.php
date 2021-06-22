@extends('layouts.app', ['activePage' => 'STOCK', 'titlePage' => __('Table List')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div id="{{$magasin->id}}"><div class="row"> 
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title " >{{$magasin->nom}} </h4>
            <p class="card-category">ceci est le stock du magasin {{$magasin->nom}}</p>
            <form method="POST" action='/stock-list2/{{$magasin->id}}/nouveauStock'>
                        @csrf
                <button class="btn btn-secondary " type="submit" >
                 Nouveau Stock
                </button>
            </form>
          </div>
          <div class="card-body">
            <div class="table-responsive">
            @if(session()->has('success'))
             <div class="alert alert-success box-content">
               {{session('success')}}
               </div>
               @endif
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
                  <th>
                    incrementer
                  </th>
                  <th>
                    decrementer
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
                    <td >
                    <form method="POST" action="/stock-list2/{{$magasin->id}}/modifQte">
                        @csrf
                      <input type='number' name='nombreincrem' Min="1"  required="true"/>
                      <input type="hidden" name='id' value="{{$stockable->id}}"   required="true"/>
                      <button class="btn btn-success" type="submit" ><b>+</b></button>
                    </form>
                  </td>
                  <td >
                    <form method="POST" action="/stock-list2/{{$magasin->id}}/modifQte">
                        @csrf
                      <input type='number' name='nombredecrem' Max='{{$stockable->resteProduit}}' Min="1" required="true"/>
                      <input type="hidden" name='id' value="{{$stockable->id}}" required="true"/>
                      <button class="btn btn-danger" type="submit" ><b>-</b></button>
                    </form>
                  </td>
                  </tr>
                  @endif
                 @endforeach
                </tbody>
              </table>
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection