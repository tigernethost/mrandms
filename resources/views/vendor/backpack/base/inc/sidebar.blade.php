@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        @include('backpack::inc.sidebar_user_panel')

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <li><a href="{{  backpack_url('round') }}"><i class="fa fa-files-o"></i> <span>Round</span></a></li>
          
          <li><a href="{{  backpack_url('criterion') }}"><i class="fa fa-files-o"></i> <span>Criteria</span></a></li>
          <li><a href="{{  backpack_url('judge') }}"><i class="fa fa-files-o"></i> <span>Judges</span></a></li>

          <li><a href="{{  backpack_url('candidate') }}"><i class="fa fa-files-o"></i> <span>Candidate</span></a></li>

          {{-- <li><a href="{{  backpack_url('judging') }}"><i class="fa fa-files-o"></i> <span>Start Judging</span></a></li> --}}
          <li><a href="{{  backpack_url('result') }}"><i class="fa fa-files-o"></i> <span>Result</span></a></li>
          <li><a href="{{  backpack_url('summary') }}"><i class="fa fa-files-o"></i> <span>Summary</span></a></li>
          <li><a href="{{  backpack_url('final') }}"><i class="fa fa-files-o"></i> <span>Final</span></a></li>
          {{-- <li><a href="{{  backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li> --}}
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
              {{-- <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li> --}}
            </ul>
          </li>

  

          <!-- ======================================= -->
          {{-- <li class="header">Other menus</li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
