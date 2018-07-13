    <div class="sidebar" data-color="rose" data-background-color="black" data-image="<?= base_url() ?>assets_admin/assets/img/sidebar-1.jpg">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
        -->
        <div class="logo">
          <a href="<?= base_url() ?>Dashboard" class="simple-text logo-mini">
            <i class="material-icons">share</i>
          </a>
          <a href="<?= base_url() ?>Dashboard" class="simple-text logo-normal">
            ITSharing
          </a>
        </div>
        <div class="sidebar-wrapper">
          <div class="user">
            <div class="photo">
              <img src="<?= $this->session->userdata('UserImage') ?>" />
            </div>
            <div class="user-info">
              <a data-toggle="collapse" href="#collapseExample" class="username">
                <span>
                     <?= $this->session->userdata('FirstName') ?> <?= $this->session->userdata('LastName') ?>
                  <b class="caret"></b>
                </span>
              </a>
              <div class="collapse" id="collapseExample">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>Accounts/myProfile">
                      <span class="sidebar-mini"> MP </span>
                      <span class="sidebar-normal"> My Profile </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span class="sidebar-mini"> S </span>
                      <span class="sidebar-normal"> Settings </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>Login/logoutAccount">
                      <span class="sidebar-mini"> O </span>
                      <span class="sidebar-normal"> Logout </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <ul class="nav">
            <li class="nav-item active ">
              <a class="nav-link" href="<?= base_url() ?>Dashboard">
                <i class="material-icons">dashboard</i>
                <p> Dashboard </p>
              </a>
            </li>
          </ul>
        </div>
      </div>