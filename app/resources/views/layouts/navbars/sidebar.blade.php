<div class="sidebar" data-color="orange" data-background-color="azure" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href=# class="simple-text logo-normal">
      {{ __('GESTSTOCK') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashbord</i>
            <p>{{ __('MAGASINS') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'stock' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('stock') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Vue D\'ensemble') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'produit' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('produit') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Produits') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'historique' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('historique') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Historique') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'entree' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('entree') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Entrée en stock') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'sortie' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('sortie') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('sortie de Produit') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
