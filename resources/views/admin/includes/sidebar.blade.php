<aside class="main-sidebar elevation-4 sidebar-dark-primary"  style="overflow-x: hidden;">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('img/icon.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AlugaÊ</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name ?? 'Usuário' }}</a>
        </div>
        <div class="info align-self-center">
          <form id="logout-form" method="post" action="{{ route('logout') }}">
              @csrf
              <a href="#" onclick="$('#logout-form').submit()" class="d-block"><i class="nav-icon fas fa-power-off"></i></a>
          </form>
      </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="/dashboard" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          @can('viewAny', App\User::class)
            <li class="nav-item has-treeview ">
              <a href="{{ route('users.index') }}" class="nav-link {{ Route::is('user*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Usuários
                </p>
              </a>
            </li>
          @endcan

          @can('viewAny', App\Categorias::class)
            <li class="nav-item has-treeview ">
              <a href="{{ route('categorias.index') }}" class="nav-link {{ Route::is('categorias*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>
                  Categorias
                </p>
              </a>
            </li>
          @endcan

          @can('viewAny', App\Produtos::class)
            <li class="nav-item has-treeview ">
              <a href="{{ route('produtos.index') }}" class="nav-link {{ Route::is('produtos*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  Produtos
                </p>
              </a>
            </li>
          @endcan
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>