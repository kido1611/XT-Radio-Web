@if(\Illuminate\Support\Facades\Request::is("admin"))
    <li class="nav-item  active ">
        <a class="nav-link  active " href="/admin">
@else
    <li class="nav-item">
        <a class="nav-link" href="/admin">
@endif
            <i class="fas fa-tv text-primary"></i> Dashboard
        </a>
    </li>
@if(\Illuminate\Support\Facades\Request::is("admin/settings"))
    <li class="nav-item active">
        <a class="nav-link active" href="/admin/settings">
@else
    <li class="nav-item">
        <a class="nav-link" href="/admin/settings">
@endif
            <i class="fas fa-tools text-orange"></i> Settings
        </a>
    </li>
@if(\Illuminate\Support\Facades\Request::is("admin/jadwal"))
    <li class="nav-item active">
        <a class="nav-link active" href="/admin/jadwal">
@else
    <li class="nav-item">
        <a class="nav-link " href="/admin/jadwal">
@endif
            <i class="fas fa-calendar-alt text-blue"></i> Jadwal
        </a>
    </li>
@if(\Illuminate\Support\Facades\Request::is("admin/stats"))
    <li class="nav-item active">
        <a class="nav-link active" href="/admin/stats">
@else
    <li class="nav-item">
        <a class="nav-link " href="/admin/stats">
@endif
            <i class="fas fa-chart-line text-green"></i> Statistik
        </a>
    </li>