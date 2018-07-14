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
                <h3 class="title text-center">New Courses List</h3>
                	<div class="input-group">
                		<form method="POST" action="<?= base_url() ?>Member/Courses/searchCourse">
		                    <div class="input-group-prepend">
		                          <button type="submit" class="btn btn-link"><i class="fab fa-4x fa-searchengin text-info"></i></button>
		                          <input type="text" name="search" class="form-control" placeholder="Search sources here ...">
		                    </div>
	                    </form>
                    	<div class="input-group-prepend">
	                        <button class="btn btn-link btn-info btn-round">Search Advance</button>
	                    </div>
                  	</div>
                  <br><br>
                  <?php if (isset($countCourseSearch)): ?>
                  	<h4 class="title text-center text-info"><i class="fa fa fa-refresh fa-spin"></i> Have <?= $countCourseSearch ?> result for serach </h4>
                  <?php endif ?>
                <div class="cards" id="morphingCards">
                    <div class="container">
                        <div class="row">
                        	<?php foreach ($arrayDataListCourses as $value): ?>
	                            <div class="col-md-6 col-lg-6">
	                                <div class="rotating-card-container manual-flip" style="height: 442px; margin-bottom: 30px;">
	                                    <div class="card card-rotate">
	                                        <div class="front" style="height: 700px; width: 400px;">
	                                            <div class="card-body">
	                                                <img class="card-img-top img-thumbnail" style="height: 275px" src="<?= $value['TutorialImage'] ?>" alt="Card image cap">
	                                                <h4 class="card-title">
	                                                	<div class="text-center">
	                                                		<a href="#pablo">"<?= $value['TutorialTitle'] ?>"</a>
	                                                	</div>
	                                                </h4>
	                                                <p class="card-description">
	                                                	<div class="text-center">
	                                                		<?= $value['TutorialDescription'] ?>
	                                                	</div>
	                                                </p>
	                                                
	                                                <div class="stats text-center">
	                                                	<?= $value['CategorieIcon'] ?>
	                                                </div>
	                                                <br>
	                                                <div class="stats text-center">
	                                                    <button type="button" name="button" class="btn btn-info btn-fill btn-round btn-rotate">
	                                                        <i class="material-icons">refresh</i> Click To View Details
	                                                    <div class="ripple-container"></div></button>
	                                                </div>
	                                            </div>
	                                            <div class="card-footer">
	                                                <div class="author">
	                                                    <a href="#pablo">
	                                                        <img src="<?= base_url() ?>assets/img/faces/avatar.jpg" alt="..." class="avatar img-raised">
	                                                        <span class="card-title"><?= $value['FirstName'] ?> <?= $value['LastName'] ?></span>
	                                                    </a>
	                                                </div>
	                                                <div class="ml-auto">
	                                                    <a href=""><i class="far fa-thumbs-up"></a></i> <?= $value['TutorialLike'] ?> .  
	                                                    <a href=""><i class="fas fa-share-alt"></i></a> 45 .    
	                                                    <i class="fas fa-cloud-upload-alt"></i> <?= date('d-m-Y',$value['TutorialDateUpload']) ?>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="back back-background" style="height: 384px; width: 289.984px; background-image: url('<?= base_url() ?>assets/img/examples/color3.jpg'); opacity: 1;" >
	                                            <div class="card-body" >
	                                                <br>
	                                                <h5 class="card-title">
	                                                    Course Information...
	                                                </h5>
	                                                <p class="card-description">
	                                                    You can read this article or share it with your friends and family on different networks...
	                                                </p>
	                                                <div class="stats text-center card-title">
	                                                	<div class="text-center">
	                                                		Language : <?= $value['TutorialLanguage'] ?>
	                                                	</div>
	                                                	<div class="text-center">
	                                                		Level : <?= $value['TutorialLevel'] ?>
	                                                	</div>
	                                                </div>
	                                                <div class="stats text-center">
	                                                    <a href="#pablo" class="btn btn-rose btn-lg btn-round">
	                                                        <i class="material-icons">subject</i> Source View
	                                                    </a>
	                                                    <br>
	                                                    <p class="card-title">Download below</p>
	                                                    <br>
	                                                    <?php if ($this->session->has_userdata('UserID')): ?>
	                                                    	<?php if ($value['TutorialURL'] != ""): ?>
	                                                    		<a target="_blank" href="<?= $value['TutorialURL'] ?>" class="btn btn-round">
			                                                        <i class="fa fa-google"></i> GGDriver
			                                                    </a>
	                                                    	<?php endif ?>

	                                                    	<?php if ($value['TutorialURL2'] != ""): ?>
	                                                    		<a target="_blank" href="<?= $value['TutorialURL2'] ?>" class="btn btn-round btn-dribbble">
			                                                        <i class="fa fa-dribbble"></i> Mega
			                                                    </a>
	                                                    	<?php endif ?>

	                                                    	<?php if ($value['TutorialURL3'] != ""): ?>
	                                                    		<a target="_blank" href="<?= $value['TutorialURL3'] ?>" class="btn btn-round btn-facebook">
			                                                        <i class="fa fa-facebook"></i> Fshare
			                                                    </a>
	                                                    	<?php endif ?>
														<?php else: ?>
														    <a href="#pablo" class="btn btn-round btn-danger" data-toggle="modal" data-target="#loginModal">
		                                                        <i class="fa fa-exclamation-triangle"></i> You not login. Please login to download.
		                                                    </a>
														<?php endif ?>
	                                                </div>
	                                                <br>
	                                                <button type="button" name="button" class="btn btn-link btn-round btn-rotate">
	                                                    <i class="material-icons">refresh</i> Back...
	                                                	<div class="ripple-container"></div>
	                                            	</button>
	                                            	<br>
	                                            	<?php if ($this->session->has_userdata('UserID')): ?>
	                                            		<?php 
	                                            			$userID = $this->session->userdata('UserID');
	                                            		 ?>
	                                            		<input type="text" name="categorieID" class="categorieID d-none" value="<?= $value['CategorieID'] ?>">
	                                            		<input type="text" name="tutorialID" class="tutorialID d-none" value="<?= $value['TutorialID'] ?>">
	                                            		<input type="text" name="userID" class="userID d-none" value="<?= $userID ?>">
                                                    	<button type="button" name="button" class="btnAddMyCourses btn btn-link btn-round btn-info">
		                                                    <i class="material-icons">add</i> Add My Courses
		                                                	<div class="ripple-container"></div>
		                                            	</button>

													<?php else: ?>
													    
													<?php endif ?>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
                            <?php endforeach ?>
                        </div>
                        <br><br>
                        <?php 
							$uri = $_SERVER['REQUEST_URI'];
							$uri = explode('/',$uri);
							$numberPageCurrent = end($uri);

						 ?>
                        <div class="row">
                        	<div class="col-md-2 ml-auto mr-auto">
                    			<ul class="pagination pagination-info">
                    				<?php if (isset($numberPage)): ?>
                    					<?php if ($numberPageCurrent <=1 ): ?>

	                    				<?php else: ?>
	                    					<li class="page-item">
			                                    <a href="<?= base_url() ?>Home/page/<?= $numberPageCurrent - 1 ?>" class="page-link"> prev<div class="ripple-container"></div></a>
			                                </li>
	                    				<?php endif ?>
		                                <?php
		                                	$count = 1; 
		                                	for ($i = 0; $i < $numberPage; $i++) {
		                                		?>
		                                		<?php if ($i == $numberPageCurrent -1): ?>
		                                			<li class="active page-item">
					                                    <a href="" class="page-link"><?= $count++ ?></a>
					                                </li>
		                                		<?php else: ?>
		                                			<li class="page-item">
					                                    <a href="<?= base_url() ?>Home/page/<?= $count ?>" class="page-link"><?= $count++ ?><div class="ripple-container"></div></a>
					                                <li>
		                                		<?php endif ?>
		                                		
				                                <?php
		                                	}
		                                 ?>
		                                 <?php if ($numberPageCurrent == $numberPage): ?>
											
		                                 <?php elseif($numberPageCurrent == 'Home'): ?>
								 			<li class="page-item">
			                                    <a href="<?= base_url() ?>Home/page/<?= $numberPageCurrent + 2 ?>" class="page-link">next <div class="ripple-container"></div></a>
			                                </li>
										 <?php else: ?>
										 	<li class="page-item">
			                                    <a href="<?= base_url() ?>Home/page/<?= $numberPageCurrent + 1 ?>" class="page-link">next <div class="ripple-container"></div></a>
			                                </li>
										 <?php endif ?>
                    				<?php endif ?>
	                            </ul>
	                        </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="section">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <ul class="nav nav-pills nav-pills-primary">
                            <li class="nav-item">
                                <a class="nav-link active" href="#pill1" data-toggle="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pill2" data-toggle="tab">World</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pill3" data-toggle="tab">Arts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pill3" data-toggle="tab">Tech</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pill3" data-toggle="tab">Business</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-space">
                            <div class="tab-pane active" id="pill1"></div>
                            <div class="tab-pane" id="pill2"></div>
                            <div class="tab-pane" id="pill3"></div>
                            <div class="tab-pane" id="pill4"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-raised card-background" style="background-image: url('<?= base_url() ?>assets/img/examples/office2.jpg')">
                            <div class="card-body">
                                <h6 class="card-category text-info">Worlds</h6>
                                <a href="#pablo">
                                    <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                </a>
                                <p class="card-description">
                                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                </p>
                                <a href="#pablo" class="btn btn-danger btn-round">
                                    <i class="material-icons">format_align_left</i> Read Article
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-raised card-background" style="background-image: url('<?= base_url() ?>assets/img/examples/blog8.jpg')">
                            <div class="card-body">
                                <h6 class="card-category text-info">Business</h6>
                                <h3 class="card-title">Working on Wallstreet is Not So Easy</h3>
                                <p class="card-description">
                                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                </p>
                                <a href="#pablo" class="btn btn-primary btn-round">
                                    <i class="material-icons">format_align_left</i> Read Article
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-raised card-background" style="background-image: url('<?= base_url() ?>assets/img/examples/card-project6.jpg')">
                            <div class="card-body">
                                <h6 class="card-category text-info">Marketing</h6>
                                <h3 class="card-title">0 to 100.000 Customers in 6 months</h3>
                                <p class="card-description">
                                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                </p>
                                <a href="#pablo" class="btn btn-warning btn-round">
                                    <i class="material-icons">subject</i> Read Case Study
                                </a>
                                <a href="#pablo" class="btn btn-white btn-just-icon btn-link" title="" rel="tooltip" data-original-title="Save to Pocket">
                                    <i class="fa fa-get-pocket"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="title text-center">You may also be interested in</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="<?= base_url() ?>assets/img/bg5.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">Enterprise</h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                                </h4>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="<?= base_url() ?>assets/img/examples/blog5.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-success">
                                    Startups
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Lyft launching cross-platform service this week</a>
                                </h4>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="<?= base_url() ?>assets/img/examples/blog6.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-danger">
                                    <i class="material-icons">trending_up</i> Enterprise
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">6 insights into the French Fashion landscape</a>
                                </h4>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="#pablo"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require('widget_member/subsribe.php') ?>
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
	                                        <input type="text" name="userName" class="form-control" placeholder="Username..." required="true">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <div class="input-group">
	                                        <div class="input-group-prepend">
	                                            <span class="input-group-text">
	                                                <i class="material-icons">lock_outline</i>
	                                            </span>
	                                        </div>
	                                        <input type="password" name="passWord" placeholder="Password..." class="form-control" required="true" />
	                                    </div>
	                                </div>
	                            </div>
	                        
	                    </div>
	                    <div class="modal-footer justify-content-center">
	                        <input type="submit" class="btnLogin btn btn-info btn-wd btn-lg btn-round" value="Get Started">
	                    </div>
	                    <br>
	                    <div class="text-center">
	                    	<?php if ($error = $this->session->flashdata('login_error')): ?>
								<p style="color: red"><b>Wrong username or password. <br> Try again or click Forgot password to reset it.</b></p>
							<?php endif ?>
							<?php if ($error = $this->session->flashdata('account_lock')): ?>
								<p style="color: red"><b>This account is currently locked. You can request to unlock <a style="color: red" href="<?= base_url() ?>Lock"><b>Here</b></a> or contact the administrator for more details</b>.</p>
							<?php endif ?>
	                    </div>
	                    <div class="text-center">
	                    	<a href=""><p>Forgot Password ?</p></a>
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
            	<form class="form" method="POST" action="<?= base_url() ?>Member/Register/registerAccount">
	                <div class="card card-signup card-plain">
	                    <div class="modal-header">
	                        <h3 class="modal-title card-title">Register</h3>
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
	                                                <input type="text" name="userName" placeholder="Username..." class="form-control" />
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
	                                        <div class="form-group">
	                                            <div class="input-group">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text">
	                                                        <i class="material-icons">lock_outline</i>
	                                                    </span>
	                                                </div>
	                                                <input type="password" name="confirmPassword" placeholder="Confirm Password..." class="form-control" />
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="input-group">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text">
	                                                        <i class="material-icons">mail</i>
	                                                    </span>
	                                                </div>
	                                                <input type="text" name="email" class="form-control" placeholder="Email...">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="input-group">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text">
	                                                        <i class="material-icons">face</i>
	                                                    </span>
	                                                </div>
	                                                <input type="text" name="firstName" class="form-control" placeholder="First Name...">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="input-group">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text">
	                                                        <i class="material-icons">face</i>
	                                                    </span>
	                                                </div>
	                                                <input type="text" name="lastName" class="form-control" placeholder="Last Name...">
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
	                                    <br>
	                                    <div class="modal-footer justify-content-center">
	                                        <button type="submit" class="btn btn-danger btn-round btn-lg">Get Started</button>
	                                    </div>
										<br>
	                                    <div class="modal-footer justify-content-center">
	                                    	<?php if ($error = $this->session->flashdata('account_exist')): ?>
												<p style="color: red"><b>This username already exists. <br>Try again other account.</b></p>
											<?php endif ?>
											<?php if ($error = $this->session->flashdata('error_confirmpassword')): ?>
												<p style="color: red"><b>Those passwords didn't match. Try again.</b></p>
											<?php endif ?>
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                </div>
            	</form>
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
    <?php if ($error = $this->session->flashdata('login_error') || $error = $this->session->flashdata('account_lock')): ?>
    	<script type="text/javascript">
			$(window).on('load',function(){
		        $('#loginModal').modal('show');
		    });
		</script>
    <?php endif ?>
    <?php if ($error = $this->session->flashdata('account_exist') || $error = $this->session->flashdata('error_confirmpassword')): ?>
    	<script type="text/javascript">
			$(window).on('load',function(){
		        $('#signupModal').modal('show');
		    });
		</script>
    <?php endif ?>
</body>
<script>
	$('body').on('click', '.btnAddMyCourses', function(event) {
		swal(
		  'Good job!',
		  'You clicked the button!',
		  'success'
		);
		tutorialID = $(this).parent().children('.tutorialID').val();
		userID = $(this).parent().children('.userID').val();
		categorieID = $(this).parent().children('.categorieID').val();

		console.log(tutorialID);
		console.log(userID);
		console.log(categorieID);
		$.ajax({
			url: '<?= base_url()?>Member/Courses/addMyCourse',
			type: 'POST',
			dataType: 'json',
			data: {
				userID: userID,
				tutorialID: tutorialID,
				categorieID: categorieID,
			},
		})
		.done(function() {
			//console.log("success");
		})
		.fail(function() {
			//console.log("error");
		})
		.always(function() {
			//console.log("complete");
		});
		
		$(this).parent().parent().parent().parent().parent().remove();
	});
</script>
</html>
