<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="https://cms.alcancesolutions.com/storage/images/sidebar.png" width="60" alt="alcance">
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard')}}">AC</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main Menu</li>
            <li>
                <a href="{{ route('dashboard')}}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('service.index')}}" class="nav-link {{ Request::is('service/*') ? 'active' : '' }}">
                    <i class="far fa-user"></i>
                    <span>Services</span>
                </a>
            </li>
            <li>
                <a href="{{ route('resource.index')}}" class="nav-link {{ Request::is('resoruce/*') ? 'active' : '' }}">
                    <i class="far fa-folder"></i>
                    <span>Resources</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
