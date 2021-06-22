@extends('layouts.app', ['activePage' => 'HISTORIQUE', 'titlePage' => __('Icons')])

@section('content')
<div class="content">
  <div class="container-fluid">
  <div class="row">
      
   <div class="col-lg-12 col-md-6 col-sm-6">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title">HISTORIQUE</h4>
        <p class="card-category">ensemble des operations</p>
      </div>
      <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    id
                 </th>
                  <th>
                    action
                  </th>
                  <th>
                    acteur
                  </th>
                  <th>
                    description
                  </th>
                  <th>
                    date
                  </th>
                  
                </thead>
               
              </table>
            </div>
       </div>
       </div>
    </div>
<div class="col-lg-4 " >
  <div class="card">
      <div class="">
 
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection