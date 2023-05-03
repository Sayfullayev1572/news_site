<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a > <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Admin Panel</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Bosh sahifa</span></a>
            </li>
            @role('admin')
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <polyline points="17 11 19 13 23 9"></polyline>
                    </svg>
                    <span>Adminstratsiya</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                  <li><a href="{{ route('admin.users.index') }}">Users</a></li>
                  <li><a href="{{ route('admin.roles.index') }}">Roles</a></li>
                  <li><a href="{{ route('admin.permission.index') }}">Permissions</a></li>
                </ul>
            </li>
            @endrole
            <li class="dropdown">
                <a href="{{ route('admin.categories.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Categories</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.posts.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Posts</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.tags.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Tags</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.ads.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Ads</span></a>
            </li>
        </ul>
    </aside>
</div>
