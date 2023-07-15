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
<li class="nav-item">
    <a href="{{ url('admin/class/list') }}" class="nav-link @if (Request::segment(2) == 'class') active @endif">
        <i class="nav-icon fas fa-users"></i>
        <p>Class</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('admin/subject/list') }}" class="nav-link @if (Request::segment(2) == 'subject') active @endif">
        <i class="nav-icon fas fa-book"></i>
        <p>Subject</p>
    </a>
</li>
