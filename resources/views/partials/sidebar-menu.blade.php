      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ route('manage.dashboard') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route('jobs.index') }}"><i class="fa fa-link"></i> <span>Jobs</span></a></li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Events</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->