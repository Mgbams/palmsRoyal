<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('palms-royal-homepage') }}" class="brand-link">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwPHoNi80aBAEcV5c8tu4gMl3MLzQG9H7KIQ&usqp=CAU" alt="PalmsRoyal Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>