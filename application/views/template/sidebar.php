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
                <a href="#"><i class="ti-user"></i>View Profile</a>
                <a href="<?= base_url('auth/logout') ?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="pcoded-navigation-label">Menu</div>
        <?php
        // data main menu
        $main_menu = $this->db->get_where('menu', array('parent' => 0));
        foreach ($main_menu->result() as $main) {
          // Query untuk mencari data sub menu
          $sub_menu = $this->db->get_where('menu', array('parent' => $main->kodemenu));
          // periksa apakah ada sub menu
          if ($sub_menu->num_rows() > 0) {
            // main menu dengan sub menu
            echo "<ul class='pcoded-item pcoded-left-item'>
                    <li class='pcoded-hasmenu'>
                      <a href='javascript:void(0)' class='waves-effect waves-dark'>
                        <span class='pcoded-micon'><i class='$main->icon'></i><b>BC</b></span>
                        <span class='pcoded-mtext'>$main->menu</span>
                      </a>";
            // sub menu nya disini
            echo "<ul class=\"pcoded-submenu\">";
            foreach ($sub_menu->result() as $sub) {
              echo "<li class=''>" . anchor($sub->url, '
                      <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                      <span class="pcoded-mtext">' . $sub->menu) . "</span>
                      <span class=\"pcoded-mcaret\"></span>
                    </li>";
            }
            echo "</ul></li></ul>";
          } else {
            // main menu tanpa sub menu
            echo "<ul class=\"pcoded-item pcoded-left-item\">
                    <li class=''>" . anchor($main->url, '
                    <span class="pcoded-micon"><i class="' . $main->icon . '"></i><b></b></span>
                    <span class="pcoded-mtext">' . $main->menu) . "</span><span class=\"pcoded-mcaret\"></span>
                    </li>
                  </ul>";
          }
        }
        ?>
      </div>
    </nav>