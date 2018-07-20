<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="<?= base_url() ?>"><i class="fab fa-3x fa-accusoft"></i>  ITSharing</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
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

                <li class="button-container nav-item iframe-extern">
                    <a href="" target="_blank" class="btn  btn-rose   btn-round btn-block" data-toggle="modal" data-target="#signupModal">
                        <i class="material-icons">person_add</i> Sign up
                    </a>
                </li>
                <li class="button-container nav-item iframe-extern">
                  <p></p>
                </li>
                <li class="button-container nav-item iframe-extern">
                    <a href="" target="_blank" class="btn  btn-info   btn-round btn-block " data-toggle="modal" data-target="#loginModal">
                        <i class="material-icons">lock_open</i> Sign in
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>