<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <nav class="pcoded-navbar">
      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
      <div class="pcoded-inner-navbar main-menu">
        <div class="">
          <div class="main-menu-header">
            <img class="img-80 img-radius" src="<?= base_url('Asset/');  ?>images/<?= $user['image'] ?>" alt="User-Profile-Image">
            <div class="user-details">
              <span id="more-details"><?= $user['name'] ?><i class="fa fa-caret-down"></i></span>
            </div>
          </div>
          <div class="main-menu-content">
            <ul>
              <li class="more-details">
                <a href=""><i class="ti-user"></i>View Profile</a>
                <a href="<?= base_url('auth/logout') ?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="pcoded-navigation-label">Menu</div>
        <ul class="pcoded-item pcoded-left-item">
          <li class="active">
            <a href="#" class="waves-effect waves-dark">
              <span class="pcoded-micon"><i class="ti-home"></i><b></b></span>
              <span class="pcoded-mtext">Dashboard</span>
              <span class="pcoded-mcaret"></span>
            </a>
          </li>
        </ul>

        <ul class="pcoded-item pcoded-left-item">
          <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
              <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
              <span class="pcoded-mtext">Basic</span>
              <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
              <li class=" ">
                <a href="breadcrumb.html" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">Breadcrumbs</span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        
        <ul class="pcoded-item pcoded-left-item">
          <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
              <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
              <span class="pcoded-mtext">Pages</span>
              <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
              <li class="">
                <a href="auth-normal-sign-in.html" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">Login</span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>
              <li class="">
                <a href="auth-sign-up.html" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext">Registration</span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>
              <li class="active">
                <a href="sample-page.html" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>S</b></span>
                  <span class="pcoded-mtext">Sample Page</span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>