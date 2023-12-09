<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{ url('static/images/logo.png') }}" alt="logo" class="img-fluid">
        </div>

        <div class="user">
            <span class="subtitle">Hola:</span>
            <div class="name">
                {{ Auth::user()->name }} {{ Auth::user()->lastname }}
                <a href="{{ url('logout') }}" data-toggle="tooltip" data-placement="top" title="salir">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>
            </div>
            <div class="email">{{ Auth::user()->email }}</div>
        </div>
    </div>

    <div class="main">
        <ul>
            <li>
                <a href="{{ url('/') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ url('/admin/products') }}">Productos</a>
            </li>
            <li>
                <a href="{{ url('/admin/users') }}">Usuarios</a>
            </li>
        </ul>
    </div>
</div>