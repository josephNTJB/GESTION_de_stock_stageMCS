@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <div class="card card-login card-hidden mb-3">
            <div class="card-header card-header-primary text-center">
              <p class="card-title"><strong>{{ __('Verify Your Email Address') }}</strong></p>
            </div>
            <div class="card-body">
              <p class="card-description text-center"></p>
              <p>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('un lien de verification aete envoye a votre email.') }}
                    </div>
                @endif
                
                {{ __('avant de proceder, veuillez verifier votre mail pour le lien.') }}
                
                @if (Route::has('verification.resend'))
                    {{ __('si vous n'avez pas recu de mail') }},  
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('envoyer un nouveau mail') }}</button>.
                    </form>
                @endif
              </p>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection
