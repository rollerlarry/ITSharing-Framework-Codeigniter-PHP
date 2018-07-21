<nav class="navbar navbar-inverse navbar-expand-lg bg-dark" role="navigation-demo">
  <div class="container">
    <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url() ?>"><i class="fab fa-3x fa-accusoft"></i>  ITSharing</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <?php if ($this->session->has_userdata('UserLevel')): ?>
            <li class="nav-item">
                <a href="<?= base_url() ?>Dashboard" class="nav-link">
                    <i class="fa fa-tachometer"></i> GoTo Dashboard
                </a>
            </li>
            <?php endif ?>
            
            <li class="nav-item">
                <a href="#pablo" class="nav-link">
                    <i class="fas fa-users"></i> Community
                </a>
            </li>
            <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">apps</i> Documentation
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="../docs/2.0/getting-started/introduction.html" class="dropdown-item">
                            <i class="material-icons">content_paste</i> Full Documentation
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                        <a href="#pablo" class="btn btn-while">
                            <i class="material-icons">email</i>
                            <span class="notification">0</span>
                            <div class="ripple-container"></div>
                        </a>
                    </li>

            <li class="dropdown nav-item">
                <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                    <div class="profile-photo-small">
                        <img src="<?= $this->session->userdata('UserImage'); ?>" alt="Circle Image" class="rounded-circle img-fluid">
                    </div>
                <div class="ripple-container"></div></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="<?= base_url() ?>Profile" class="dropdown-item">My Profile</a>
                    <a href="<?= base_url() ?>MyCourses" class="dropdown-item">My Courses</a>
                    <a href="<?= base_url() ?>Settings" class="dropdown-item">Settings</a>
                    <a href="<?= base_url() ?>Logout" class="dropdown-item">Sign out</a>
                </div>
            </li>
        </ul>
    </div>
  </div>
</nav>