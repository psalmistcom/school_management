<li class="nav-item">
    <a href="{{ url('admin/dashboard') }}" class="nav-link @if (Request::segment(2) == 'dashboard') active @endif">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('admin/admin/list') }}" class="nav-link @if (Request::segment(2) == 'admin') active @endif">
        <i class="nav-icon fas fa-user"></i>
        <p>Admin List</p>
    </a>
</li>
