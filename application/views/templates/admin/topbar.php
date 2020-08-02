<div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <!-- <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button> -->
                  <input type="hidden" name="huhu" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block"><?=$user['name'];?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                        <?=$user['name'];?> <small class="pt-1"><?=$user['email'];?></small>
                        </div>
                      </li>

                      <li>
                        <a href="<?= base_url();?>admin/profile">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <!-- <li>
                        <a href="email-inbox.html">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li> -->

                      <li class="dropdown-footer">
                        <a href="<?= base_url();?>logout" class="tombol-logout"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>