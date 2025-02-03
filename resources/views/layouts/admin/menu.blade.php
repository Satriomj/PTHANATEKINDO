<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link text-white {{(Request::routeIs('home') ? 'active':'')}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link text-white {{(Request::routeIs('users.index') ? 'active':'')}}">
                <i class="nav-icon fas fa-users"></i>
                <p>Master Pengguna</p>
            </a>
        </li>
               
        <li class="nav-item">
            <a href="{{route('kelola-tema.index')}}" class="nav-link text-white {{(Request::routeIs('kelola-tema.index') ? 'active':'')}}">
                <i class="nav-icon fas fa-cogs"></i> 
                <p>Kelola Tema</p>
            </a>
        </li>

        <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                @csrf
            </form>
            <a href="#" class="nav-link text-white @yield('')"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
              
    </ul>
</nav>