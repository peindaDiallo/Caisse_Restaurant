<div class="adminx-sidebar expand-hover push">
    <ul class="sidebar-nav">
        <li class="sidebar-nav-item">
            <a href="index.html" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
                <span class="sidebar-nav-name">
                Dashboard
              </span>
                <span class="sidebar-nav-end">

              </span>
            </a>
        </li>



        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#example" aria-expanded="false" aria-controls="example">
              <span class="sidebar-nav-icon">
                <i data-feather="pie-chart"></i>
              </span>
                <span class="sidebar-nav-name">
                ITEM
              </span>
                <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="example">
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_chartjs.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Product
                  </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-name">
                    Category
                  </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-name">
                  Sales
                  </span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navUI" aria-expanded="false" aria-controls="navUI">
              <span class="sidebar-nav-icon">
                <i data-feather="grid"></i>
              </span>
                <span class="sidebar-nav-name">
               configuration
              </span>
                <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navUI">
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link" href="{{route('admin.users.index')}}" :active="request()->routeIs('admin.user.index')">
                        <i class="far fa-circle nav-icon"></i> <p>{{__('main.user')}}</p>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                        <a class="sidebar-nav-link" href="{{route('admin.roles.index')}}" :active="request()->routeIs('admin.roles.index)">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('main.rolePermission')}}</p>
                        </a>
                </li>

    </ul>
</div><!-- Sidebar End -->
