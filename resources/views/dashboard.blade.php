@extends('layouts.app', ['activePage' => 'MAGASINS', 'titlePage' => __('STOCK MAGASINS')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        @foreach($magasins as $magasin)
        @php 
        $qte=0;
        @endphp
        @foreach($stocks as $stock)
          @if($stock->magasin==$magasin->id)
          @php 
          $qte++;
          @endphp
          @endif
          @endforeach
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            @if($magasin->id%3==0)
            <div class="card-header card-header-warning card-header-icon">
            @elseif($magasin->id%2==0)
            <div class="card-header card-header-success card-header-icon">
            @else
            <div class="card-header card-header-danger card-header-icon">
            @endif
              <div class="card-icon">
              <i class="material-icons">store</i>
              </div>
              <p class="card-category">{{$magasin->description}}</p>
              <h3 class="card-title">{{$magasin->nom}}
                
              </h3>
              <p class="card-category">{{($magasin->is_active==1)? 'oui':'non'}}</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <h4><a href="{{'stock-list2/'}}{{$magasin->id}}"> {{$qte}} stocks en cours</a></h4>
              </div>
            </div>
          </div>
        </div>
       
        @endforeach
        <!--<div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">magasin 2</p>
              <h3 class="card-title">2/10</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                 JOE FOOD
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
              <i class="material-icons">store</i>
              </div>
              <p class="card-category">MAGASIN 3</p>
              <h3 class="card-title">3/10</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                 TOM CRAIN
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
              <i class="material-icons">store</i>
              </div>
              <p class="card-category">MAGASIN 4</p>
              <h3 class="card-title">4/10</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                 GLOTELHO
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
              <i class="material-icons">store</i>
              </div>
              <p class="card-category">magasin 5</p>
              <h3 class="card-title">5/10
                
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="#pablo">TOTAL GAZ</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">magasin 6</p>
              <h3 class="card-title">6/10</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                 JOE FOODER
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
              <i class="material-icons">store</i>
              </div>
              <p class="card-category">MAGASIN 7</p>
              <h3 class="card-title">7/10</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                 SILVIE STAR
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
              <i class="material-icons">store</i>
              </div>
              <p class="card-category">MAGASIN 8/p>
              <h3 class="card-title">8/10</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                 GANSTA
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
              <i class="material-icons">store</i>
              </div>
              <p class="card-category">magasin 9</p>
              <h3 class="card-title">9/10
                
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="#pablo">mahima FLOW</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">magasin 10</p>
              <h3 class="card-title">10/10</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                STOCK CITY
              </div>
            </div>
          </div>
        </div>
        
      </div>-->
      </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush