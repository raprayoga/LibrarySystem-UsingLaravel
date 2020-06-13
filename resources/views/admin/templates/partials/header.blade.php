<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <span class="badge badge-success">
          <i class="nav-icon fas fa-user"></i>  {{ auth()->user()->name }}</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <div class="dropdown-divider"></div>
        <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="dropdown-item">Sign out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </li>
  </ul>
</nav>