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
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <img src="../assets/img/faces/christian.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title">Christian Louboutin</h3>
                                <h6>Designer</h6>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i><div class="ripple-container"></div></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i><div class="ripple-container"></div></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i><div class="ripple-container"></div></a>
                            </div>
                        </div>
                        <div class="follow">
                            <button class="btn btn-fab btn-primary btn-round" rel="tooltip" title="" data-original-title="Follow this user">
                                <i class="material-icons">add</i>
                            <div class="ripple-container"></div></button>
                        </div>
                    </div>
                </div>
                <div class="description text-center">
                    <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                            <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                <!--
                      color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                  -->
                                <li class="nav-item">
                                    <a class="nav-link active show" href="#work" role="tab" data-toggle="tab" aria-selected="true">
                                        <i class="material-icons">palette</i> Work
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#connections" role="tab" data-toggle="tab" aria-selected="false">
                                        <i class="material-icons">people</i> Connections
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#media" role="tab" data-toggle="tab" aria-selected="false">
                                        <i class="material-icons">camera</i> Media
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-space">
                    <div class="tab-pane work active show" id="work">
                        <div class="row">
                            <div class="col-md-7 ml-auto mr-auto ">
                                <h4 class="title">Latest Collections</h4>
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('../assets/img/examples/mariya-georgieva.jpg')">
                                            <a href="#pablo"></a>
                                            <div class="card-body">
                                                <label class="badge badge-warning">Spring 2016</label>
                                                <a href="#pablo">
                                                    <h2 class="card-title">Stilleto</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('../assets/img/examples/clem-onojeghuo.jpg')">
                                            <a href="#pablo"></a>
                                            <div class="card-body">
                                                <label class="badge badge-info">Spring 2016</label>
                                                <a href="#pablo">
                                                    <h2 class="card-title">High Heels</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('../assets/img/examples/olu-eletu.jpg')">
                                            <a href="#pablo"></a>
                                            <div class="card-body">
                                                <label class="badge badge-danger">Summer 2016</label>
                                                <a href="#pablo">
                                                    <h2 class="card-title">Flats</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('../assets/img/examples/darren-coleshill.jpg')">
                                            <a href="#pablo"></a>
                                            <div class="card-body">
                                                <label class="badge badge-success">Winter 2015</label>
                                                <a href="#pablo">
                                                    <h2 class="card-title">Men's Sneakers</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mr-auto ml-auto stats">
                                <h4 class="title">Stats</h4>
                                <ul class="list-unstyled">
                                    <li>
                                        <b>60</b> Products</li>
                                    <li>
                                        <b>4</b> Collections</li>
                                    <li>
                                        <b>331</b> Influencers</li>
                                    <li>
                                        <b>1.2K</b> Likes</li>
                                </ul>
                                <hr>
                                <h4 class="title">About his Work</h4>
                                <p class="description">French luxury footwear and fashion. The footwear has incorporated shiny, red-lacquered soles that have become his signature.</p>
                                <hr>
                                <h4 class="title">Focus</h4>
                                <span class="badge badge-primary">Footwear</span>
                                <span class="badge badge-rose">Luxury</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane connections" id="connections">
                        <div class="row">
                            <div class="col-md-5 ml-auto mr-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="../assets/img/faces/avatar.jpg">
                                                </a>
                                            <div class="colored-shadow" style="background-image: url(&quot;../assets/img/faces/avatar.jpg&quot;); opacity: 1;"></div></div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">Gigi Hadid</h4>
                                                <h6 class="card-category text-muted">Model</h6>
                                                <p class="card-description">
                                                    Don't be scared of the truth because we need to restart the human foundation in truth...
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mr-auto ml-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="../assets/img/faces/marc.jpg">
                                                </a>
                                            <div class="colored-shadow" style="background-image: url(&quot;../assets/img/faces/marc.jpg&quot;); opacity: 1;"></div></div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">Marc Jacobs</h4>
                                                <h6 class="card-category text-muted">Designer</h6>
                                                <p class="card-description">
                                                    Don't be scared of the truth because we need to restart the human foundation in truth...
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto mr-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="../assets/img/faces/kendall.jpg">
                                                </a>
                                            <div class="colored-shadow" style="background-image: url(&quot;../assets/img/faces/kendall.jpg&quot;); opacity: 1;"></div></div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">Kendall Jenner</h4>
                                                <h6 class="card-category text-muted">Model</h6>
                                                <p class="card-description">
                                                    I love you like Kanye loves Kanye. Don't be scared of the truth.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 ml-auto mr-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="../assets/img/faces/card-profile2-square.jpg">
                                                </a>
                                            <div class="colored-shadow" style="background-image: url(&quot;../assets/img/faces/card-profile2-square.jpg&quot;); opacity: 1;"></div></div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">George West</h4>
                                                <h6 class="card-category text-muted">Model/DJ</h6>
                                                <p class="card-description">
                                                    I love you like Kanye loves Kanye.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane text-center gallery" id="media">
                        <div class="row">
                            <div class="col-md-3 ml-auto">
                                <img src="../assets/img/examples/mariya-georgieva.jpg" class="rounded">
                                <img src="../assets/img/examples/clem-onojegaw.jpg" class="rounded">
                            </div>
                            <div class="col-md-3 mr-auto">
                                <img src="../assets/img/examples/clem-onojeghuo.jpg" class="rounded">
                                <img src="../assets/img/examples/olu-eletu.jpg" class="rounded">
                                <img src="../assets/img/examples/cynthia-del-rio.jpg" class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-notice" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">How Do You Become an Affiliate?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="instruction">
                        <div class="row">
                            <div class="col-md-8">
                                <strong>1. Register</strong>
                                <p>The first step is to create an account at
                                    <a href="https://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="picture">
                                    <img src="<?= base_url() ?>assets/img/dg1.jpg" alt="Thumbnail Image" class="rounded img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="instruction">
                        <div class="row">
                            <div class="col-md-8">
                                <strong>2. Apply</strong>
                                <p>The first step is to create an account at
                                    <a href="https://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="picture">
                                    <img src="<?= base_url() ?>assets/img/dg2.jpg" alt="Thumbnail Image" class="rounded img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>If you have more questions, don&apos;t hesitate to contact us or send us a tweet @creativetim. We&apos;re here to help!</p>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-info btn-round" data-dismiss="modal">I UNDERSTOOD!</button>
                </div>
            </div>
        </div>
    </div>
    <?php require('widget_member/bottom.php') ?>
</body>
</html>
