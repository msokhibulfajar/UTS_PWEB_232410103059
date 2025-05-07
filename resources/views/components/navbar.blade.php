<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if(request()->query('username'))
                    {{-- Menu aktif ketika sudah login --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                           href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pengelolaan') ? 'active' : '' }}"
                           href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}">Pengelolaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}"
                           href="{{ route('profile', ['username' => request()->query('username')]) }}">Profile</a>
                    </li>
                @else
                    {{-- Menu disabled ketika belum login --}}
                    <li class="nav-item">
                        <span class="nav-link disabled">Dashboard</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link disabled">Pengelolaan</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link disabled">Profile</span>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
