 <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="<?= base_url('user/dashboard');?>">
              <img itemprop="logo" src="http://localhost/pis-client/assets/img/logo/patriot_logo.png" title="Predatech Data Center Information" class="ml-4">
                <span class="brand-name"></span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                
              <li  class="has-sub <?php if($title == "Dashboard") echo "active";?> " >
                    <a class="sidenav-item-link" href='dashboard'  >
                      <i class="mdi mdi-view-dashboard outline"></i>
                      <span class="nav-text">Dashboard</span>
                    </a>
                  </li>
                
                  <li  class="has-sub <?php if($title == "My Profile") echo "active";?> " >
                    <a class="sidenav-item-link"  data-toggle="collapse" data-target="#account"
                      aria-expanded="false" aria-controls="account">
                      <i class="mdi mdi-account-settings outline"></i>
                      <span class="nav-text">Account</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse <?php if($title == "My Profile") echo "show";?>"  id="account"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li <?php if($title == "My Profile") echo "class='active'";?>>
                              <a class="sidenav-item-link" href="profile">
                                <span class="nav-text mdi mdi-account"> Profile</span>
                                
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
              </ul>
            </div>       
        </aside>