<!-- need to remove -->
<li class="nav-item ">
    <a href="{{ route('palms-royal-homepage') }}" class="nav-link home {{ request()->is('/') ? 'active' : ''}}">
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
        <i class="nav-icon fas fa-list-ul"></i>
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
        <i class="nav-icon  fas fa-user-tag"></i>
        <p style="color: white;">Roles</p>
    </a>
</li>

 <div class="nav-item">
      <button class="btn dropdown-toggle" data-toggle="dropdown" style="color: white;">
        <i class="nav-icon fas fa-key"></i>
        Extra Info
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li style="text-align: center !important;">
            <a href="{{ route('capacities') }}" class="nav-link capacities {{ request()->is('admin/capacities') ? 'active' : ''}}" style="color: black;">
                Capacity
            </a>
        </li>
        <li style="text-align: center !important;">
            <a href="{{ route('floors') }}" class="nav-link floors {{ request()->is('admin/floors') ? 'active' : ''}}" style="color: black; text-align: center !important;">
                Floor
            </a>
        </li>
      </ul>
</div>
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