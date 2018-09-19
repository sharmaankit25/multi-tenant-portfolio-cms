      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ route('manage.dashboard') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route('jobs.index') }}"><i class="fa fa-link"></i> <span>Jobs</span></a></li>
        @can('index',App\Organisation::class)
        <li><a href="{{ route('organisations.index') }}"><i class="fa fa-link"></i> <span>Organisations</span></a></li>
        @endcan
        <li><a href="{{ route('admissions.index') }}"><i class="fa fa-link"></i> <span>Admissions</span></a></li>
        <li><a href="{{ route('pages.index') }}"><i class="fa fa-link"></i> <span>Pages</span></a></li>
        <li><a href="{{ route('events.index') }}"><i class="fa fa-link"></i> <span>Events</span></a></li>
        <li><a href="{{ route('achievers.index') }}"><i class="fa fa-link"></i> <span>Achievers</span></a></li>
        <li><a href="{{ route('feedbacks.index') }}"><i class="fa fa-link"></i> <span>Feedbacks</span></a></li>
        <li><a href="{{ route('notices.index') }}"><i class="fa fa-link"></i> <span>Notice/News</span></a></li>
        <li><a href="{{ route('sliders.index') }}"><i class="fa fa-link"></i> <span>Sliders</span></a></li>
        <li><a href="{{ route('albums.index') }}"><i class="fa fa-link"></i> <span>Albums</span></a></li>

        {{--  <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Events</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>  --}}
      </ul>
      <!-- /.sidebar-menu -->