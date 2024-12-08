<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
            <i><img src="/img/logo-tc.png" width="30px"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Tcont Solog <sup>LMS</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __("Dashboard") }}</span></a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-envelope"></i>
            <span>{{ __("Pesan") }}</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    @if(Auth::user()->hasRole('student'))
    <div class="sidebar-heading">
        {{ __('Manajemen Modul') }}
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('myCourse') }}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>{{ __("Modul Aplikasi") }}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('myQuiz') }}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>{{ __("Quiz dan Ujian") }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    @endif



    @can('menu.education')
    <!-- Heading -->
    <div class="sidebar-heading">
        {{ __('Peserta') }}
    </div>

    @can('mentor.list')
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#MentorsCollapse" aria-expanded="true" aria-controls="ACLCollapse">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Daftar Peserta</span>
        </a>
        <div id="MentorsCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('myLearners') }}">{{ __('Daftar Peserta') }}</a>

            </div>

        </div>

    </li>
    @endcan

    {{-- @can('course.index')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('adminMenuCourse') }}">
            <i class="fas fa-fw fa-chalkboard-teacher"></i>
            <span>{{ __("Pusat Peserta") }}</span></a>
    </li>
    @endcan --}}

    @endcan


    @can('menu.education')




    @role('Super-Admin')

    {{-- <div class="sidebar-heading">
        {{ __('Financial') }}
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Financial" aria-expanded="true" aria-controls="ACLCollapse">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>{{ __('Financial') }}</span>
        </a>
        <div id="Financial" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('plan.index') }}">{{ __('Plan') }}</a>

            </div>
        </div>
    </li> --}}


    <div class="sidebar-heading">
        {{ __('Setting Admin') }}
    </div>
    <!-- Nav Item - Admin Setup LMS -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ACLCollapse" aria-expanded="true" aria-controls="ACLCollapse">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>Setting</span>
        </a>
        <div id="ACLCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('user.index') }}">{{ __('User') }}</a>
                <a class="collapse-item" href="{{ route('role.index') }}">{{ __('Role') }}</a>
                <a class="collapse-item" href="{{ route('permission.index') }}">{{ __('Permission') }}</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{ route('configuration.index') }}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>{{ __("Konfigurasi") }}</span></a>
    </li>

    @endrole

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    @endcan
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->