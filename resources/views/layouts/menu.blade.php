<!-- need to remove -->
<li class="nav-item ">
    <a href="{{ route('get.dashboard') }}" class="nav-link home {{ request()->is('admin/dashboard') ? 'active' : ''}}">
        <i class="nav-icon fas fa-home"></i>
        <p style="color: white;">Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('hotel') }}" class="nav-link hotel {{ request()->is('admin/hotel') ? 'active' : ''}}">
        <i class="nav-icon fas fa-hotel"></i>
        <p style="color: white;">Hotel</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('rooms') }}" class="nav-link rooms {{ request()->is('admin/rooms') ? 'active' : ''}}">
        <i class="nav-icon fas fa-bed"></i>
        <p style="color: white;">Rooms</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('facilities') }}" class="nav-link rooms {{ request()->is('admin/facilities') ? 'active' : ''}}">
        <i class="nav-icon fas fa-bed"></i>
        <p style="color: white;">Facilities</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('countries') }}" class="nav-link countries  {{ request()->is('admin/countries') ? 'active' : ''}}">
        <i class="nav-icon fas fa-flag"></i>
        <p style="color: white;">Countries</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('roles-and-permissions.index') }}" class="nav-link countries  {{ request()->is('admin/roles-and-permissions.index') ? 'active' : ''}}">
        <i class="nav-icon fas fa-flag"></i>
        <p style="color: white;">Roles</p>
    </a>
</li>
{{--<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link users">
        <i class="nav-icon fas fa-user"></i>
        <p style="color: white;">Users</p>
    </a>
</li>--}}
{{--<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link room-types">
        <i class="nav-icon fas fa-list" aria-hidden="true"></i>
        <p style="color: white;">Room Types</p>
    </a>
</li>--}}