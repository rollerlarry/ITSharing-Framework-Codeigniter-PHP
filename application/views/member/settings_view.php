<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <?php require('widget_member/top.php') ?>
</head>
<body class="blog-posts ">
   
 
    <?php if ($this->session->has_userdata('UserID')): ?>
	    <?php require('widget_member/navin.php') ?>   
	<?php else: ?>
	    <?php require('widget_member/navout.php') ?>
	<?php endif ?>
    
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url(<?= base_url() ?>/assets/img/bg10.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">A Place for Developer to Share and Discover New Stories</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <h3 class="title text-center">Settings</h3>
                	
                  <br><br>
                <div class="cards" id="morphingCards">
                    <div class="container">
                        <div class="row">
	                        <div class="col-md-12">
	                            <div class="card card-nav-tabs">
	                                <div class="card-header card-header-primary">
	                                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
	                                    <div class="nav-tabs-navigation">
	                                        <div class="nav-tabs-wrapper">
	                                            <ul class="nav nav-tabs" data-tabs="tabs">
	                                                <li class="nav-item">
	                                                    <a class="nav-link active show" href="#profile" data-toggle="tab">
	                                                        <i class="material-icons">settings</i> Change Password
	                                                    <div class="ripple-container"></div></a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a class="nav-link" href="#settings" data-toggle="tab">
	                                                        <i class="material-icons">build</i> Manage Courses
	                                                    <div class="ripple-container"></div></a>
	                                                </li>
	                                                <li class="nav-item">
	                                                    <a class="nav-link" href="#messages" data-toggle="tab">
	                                                        <i class="material-icons">chat</i> Messages
	                                                    <div class="ripple-container"></div></a>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="card-body ">
	                                    <div class="tab-content text-center">
	                                        <div class="tab-pane active show" id="profile">
                                                <br>
                                                <i class="fas fa-5x fa-unlock-alt"></i>
                                                <br><br><br>
                                                <div class="text-center">
                                                    <div class="col-lg-12 col-sm-6">
                                                        <div class="form-group bmd-form-group">
                                                            <label for="exampleInput1" >Old Password</label>
                                                            <input type="email" class="form-control" id="exampleInput1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-6">
                                                        <div class="form-group bmd-form-group">
                                                            <label for="exampleInput1" >New Password</label>
                                                            <input type="email" class="form-control" id="exampleInput1">
                                                            <span class="bmd-help">We recommend that you set a password difficult to guess</span>
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label for="exampleInput1" >Confirm Password</label>
                                                            <input type="email" class="form-control" id="exampleInput1">
                                                            <span class="bmd-help">We recommend that you set a password difficult to guess</span>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <a href="#pablo" class="btn btn-info btn-round">
                                                        Save Changes 
                                                    <div class="ripple-container"></div></a>
                                                </div>
	                                        </div>
	                                        <div class="tab-pane" id="messages">
	                                            <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
	                                        </div>
	                                        <div class="tab-pane" id="settings">
	                                            <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- End Tabs with icons on Card -->
	                        </div>
	                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require('widget_member/social.php') ?>
        <?php require('widget_member/footer.php') ?>
    </div>
    <!-- Model -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-login" role="document">
            <div class="modal-content">
            	<form class="form" method="POST" action="<?= base_url() ?>Member/Login/loginAccount">
	                <div class="card card-signup card-plain">
	                    <div class="modal-header">
	                        <div class="card-header card-header-info text-center">
	                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
	                            <h4 class="card-title">Log in</h4>
	                            <div class="social-line">
	                                <a href="#pablo" class="btn btn-just-icon btn-link">
	                                    <i class="fab fa-facebook-f"></i>
	                                </a>
	                                <a href="#pablo" class="btn btn-just-icon btn-link">
	                                    <i class="fab fa-twitter"></i>
	                                </a>
	                                <a href="#pablo" class="btn btn-just-icon btn-link">
	                                    <i class="fab fa-google"></i>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="modal-body">
	                       
	                            <p class="description text-center">Or Be Classical</p>
	                            <div class="card-body">
	                                <div class="form-group">
	                                    <div class="input-group">
	                                        <div class="input-group-prepend">
	                                            <span class="input-group-text">
	                                                <i class="material-icons">perm_identity</i>
	                                            </span>
	                                        </div>
	                                        <input type="text" name="userName" class="form-control" placeholder="Username...">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <div class="input-group">
	                                        <div class="input-group-prepend">
	                                            <span class="input-group-text">
	                                                <i class="material-icons">lock_outline</i>
	                                            </span>
	                                        </div>
	                                        <input type="password" name="passWord" placeholder="Password..." class="form-control" />
	                                    </div>
	                                </div>
	                            </div>
	                        
	                    </div>
	                    <div class="modal-footer justify-content-center">
	                        <input type="submit" class="btn btn-info btn-wd btn-lg btn-round" value="Get Started">
	                    </div>
	                    <br>
	                    <div class="text-center">
	                    	<p>Dont a member ! <b class="text-danger">SignUp now</b></p>
	                    </div>
	                    <br>
	                </div>
                </form>
            </div>
        </div>
    </div>
     <div class="modal fade" id="signupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-signup" role="document">
            <div class="modal-content">
                <div class="card card-signup card-plain">
                    <div class="modal-header">
                        <h5 class="modal-title card-title">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="material-icons">clear</i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="info info-horizontal">
                                    <div class="icon icon-rose">
                                        <i class="material-icons">timeline</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Marketing</h4>
                                        <p class="description">
                                            We've created the marketing campaign of the community. It was a very interesting collaboration between developer.
                                        </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">code</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Fully Coded in HTML5</h4>
                                        <p class="description">
                                            We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                        </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-info">
                                        <i class="material-icons">group</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Built Your Futures</h4>
                                        <p class="description">
                                            You can download everything you need. All free. We hope you happy about this.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mr-auto">
                                <div class="social text-center">
                                    <button class="btn btn-just-icon btn-round btn-twitter">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-dribbble">
                                        <i class="fab fa-google"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                    <h4> or be classical </h4>
                                </div>
                                <form class="form" method="" action="#">
                                    <div class="card-body">
                                    	<div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">perm_identity</i>
                                                    </span>
                                                </div>
                                                <input type="text" placeholder="Username..." class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                </div>
                                                <input type="password" placeholder="Password..." class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">mail</i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Email...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="First Name...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Last Name...">
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                                I agree to the
                                                <a href="#something">terms and conditions</a>.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <a href="#pablo" class="btn btn-danger btn-round btn-lg">Get Started</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('widget_member/bottom.php') ?>
</body>
</html>
