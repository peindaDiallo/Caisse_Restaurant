
<nav class="navbar navbar-expand justify-content-between fixed-top">
    <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.html">
        <img src="./demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
        AdminX
    </a>

    <form class="form-inline form-quicksearch d-none d-md-block mx-auto">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-icon">
                    <i data-feather="search"></i>
                </div>
            </div>
            <input type="text" class="form-control" id="search" placeholder="Type to search...">
        </div>
    </form>

    <div class="d-flex flex-1 d-block d-md-none">
        <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
        </a>
    </div>
    <ul class="navbar-nav d-flex justify-content-end mr-2">
        <!-- Notificatoins -->

        <li class="nav-item dropdown">
            <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                <img src="./demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">

            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">My Tasks</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="icon"><i class="mdi mdi-logout"></i></span>

                        <span class="align-middle">{{ __('Sign out') }}</span>
                    </a>
                </form>
{{--                <a class="dropdown-item text-danger" href="#">Sign out</a>--}}
            </div>
        </li>
    </ul>
    <ul class="navbar-nav d-flex justify-content-end mr-2">
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navlang" aria-expanded="false" aria-controls="navlang">
                        <span class="icon"><i class="mdi mdi-flag"></i></span>
                        <span>language</span>
                        <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                     </span>
                    </a>
                    <ul class="sidebar-sub-nav collapse" id="navlang">
                        <li>
                            <a class="" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <x-current-language/>
                            </a>
                            <ul>
                                <x-atpro-internalisation/>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</nav>

