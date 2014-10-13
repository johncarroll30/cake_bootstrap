<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/login">Holiday Noticeboard Administration</a>
  </div>
  <!-- /.navbar-header -->

  <ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-user">
        <li><a href="/admin/users/profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
        </li>
        <li class="divider"></li>
        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
      </ul>
      <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
  </ul>
  <!-- /.navbar-top-links -->

  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav" id="side-menu">
        <!--<li class="sidebar-search">
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>

        </li>-->
        <li>
          <a class="active" href="/admin/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
          <a href="/admin/blog/blog_posts"><i class="fa fa-file-text fa-fw"></i> Blog</a>
        </li>
          <li>
          <a href="/admin/pages/pages"><i class="fa fa-table fa-fw"></i> Pages</a>
        </li>
        <li>
          <a href="/admin/categories"><i class="fa fa-folder fa-fw"></i> Categories</a>
        </li>
        <li>
          <a href="/admin/users"><i class="fa fa-group fa-fw"></i> Users and Groups</a>
        </li>
        <li>
          <a href="/admin/acl/aros"><i class="fa fa-lock fa-fw"></i> Access Control<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="/admin/acl/aros">Permissions</a>
            </li>
            <li>
              <a href="/admin/acl/acos">Actions</a>
            </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>
      </ul>
    </div>
    <!-- /.sidebar-collapse -->
  </div>
  <!-- /.navbar-static-side -->
</nav>
