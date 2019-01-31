<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <!-- Sidebar Header    -->
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <!-- User Info-->
      <a href="/dashboard">
        <div class="sidenav-header-inner text-center">
          <span class="flux" style="font-size: 20px;">Oléron Law & Co.</span><span>olcbd.com</span>
        </div>
      </a>
      <!-- Small Brand information, appears on minimized sidebar-->
      <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>olc</strong><strong class="text-primary">bd</strong></a></div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <div class="main-menu">
      <h5 class="sidenav-heading">Menubar</h5>
      <ul id="side-main-menu" class="side-menu list-unstyled">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="/dashboard"> <i class="icon-home"></i>Dashboard</a></li>
        <li class="{{ Request::is('create-menu') ? 'active' : '' }}"><a href="/create-menu"> <i class="icon-form"></i>Add New Menu</a></li>
        <li class="{{ Request::is('create-page') ? 'active' : '' }}"><a href="/create-page"> <i class="icon-form"></i>Add New Page</a></li>
        <li class="{{ Request::is('create-download') ? 'active' : '' }}"><a href="/create-download"> <i class="icon-form"></i>Add Download Page</a></li>
        <li class="{{ Request::is('create-image-content') ? 'active' : '' }}"><a href="/create-image-content"> <i class="icon-form"></i>Add Attachment Page</a></li>
        <li class="{{ Request::is('all-mails') ? 'active' : '' }}"><a href="/all-mails"> <i class="icon-form"></i>All Mails</a></li>


        <li><a href="{{ URL::previous() }}" class="btn btn-primary" ><i class="fa fa-arrow-circle-left" style="font-size:20px;color:yellow"></i></a></li>
        {{-- <li><input type="button" class="btn btn-primary" id="backButton" value="&#8249;" onclick="history.back(-1)" /></li> --}}

      </ul>
    </div>

  </div>
</nav>
