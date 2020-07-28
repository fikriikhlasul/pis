 <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="<?= base_url('admin/dashboard');?>">
              <img itemprop="logo" src="<?= base_url();?>assets/img/logo/patriot_logo.png" title="Predatech Data Center Information" class="ml-4">
                <span class="brand-name"></span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                
              <li  class="has-sub <?php if($title == "Dashboard") echo "active";?> " >
                    <a class="sidenav-item-link" href='<?= base_url();?>admin/dashboard'  >
                      <i class="mdi mdi-view-dashboard outline"></i>
                      <span class="nav-text">Dashboard</span>
                    </a>
                  </li>
                
                  <li  class="has-sub <?php if($title == "My Profile") echo "active expand";?> " >
                    <a class="sidenav-item-link"  data-toggle="collapse" data-target="#account"
                      aria-expanded="false" aria-controls="account">
                      <i class="mdi mdi-account-settings outline"></i>
                      <span class="nav-text">Account</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse <?php if($title == "My Profile") echo "show";?>"  id="account"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li <?php if($title == "My Profile") echo "class='active'";?>>
                              <a class="sidenav-item-link" href="<?= base_url();?>admin/profile">
                                <span class="nav-text mdi mdi-account"> Profile</span>
                                
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                  <li  class="has-sub <?php if($title == "Manajemen Data Seluruh Anggota"||$title == "Manajemen Data Anggota Aktif"||$title == "Manajemen Data Alumni"||$title == "Manajemen Data Dosen") echo "active expand";?> " >
                    <a class="sidenav-item-link"  data-toggle="collapse" data-target="#data-master"
                      aria-expanded="false" aria-controls="account">
                      <i class="mdi mdi-database-edit"></i>
                      <span class="nav-text">Data Master</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse <?php if($title == "Manajemen Data Seluruh Anggota"||$title == "Manajemen Data Anggota Aktif"||$title == "Manajemen Data Alumni"||$title == "Manajemen Data Dosen") echo "show";?>"  id="data-master"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">

                            <li <?php if($title == "Manajemen Data Seluruh Anggota") echo "class='active'";?>>
                              <a class="sidenav-item-link" href="<?= base_url();?>admin/data-seluruh-anggota">
                                <span class="nav-text mdi mdi-account-group"> Data Seluruh Anggota</span>
                                
                              </a>
                            </li>
                            <li <?php if($title == "Manajemen Data Anggota Aktif") echo "class='active'";?>>
                              <a class="sidenav-item-link" href="<?= base_url();?>admin/data-anggota-aktif">
                                <span class="nav-text mdi mdi-account-multiple"> Data Anggota Aktif</span>
                                
                              </a>
                            </li>
                            <li <?php if($title == "Manajemen Data Alumni") echo "class='active'";?>>
                              <a class="sidenav-item-link" href="<?= base_url();?>admin/data-alumni">
                                <span class="nav-text mdi mdi-account"> Data Alumni</span>
                                
                              </a>
                            </li>
                            <li <?php if($title  == "Manajemen Data Dosen") echo "class='active'";?>>
                              <a class="sidenav-item-link" href="<?= base_url();?>admin/data-dosen">
                                <span class="nav-text mdi mdi-teach"> Data Dosen</span>
                                
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
              </ul>
            </div>       
        </aside>