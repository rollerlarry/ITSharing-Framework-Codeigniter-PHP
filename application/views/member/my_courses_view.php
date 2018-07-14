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
                <h3 class="title text-center">My Courses List Saved</h3>
                  <br><br>
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
	                                                	<?php if ($value['CategorieIcon'] == 1): ?>
	                                                		<i class="fab fa-5x fa-android"></i> Android
	                                                	<?php elseif ($value['CategorieIcon'] == 2): ?>
															<i class="fab fa-5x fa-html5"></i> HTML
	                                                	<?php elseif ($value['CategorieIcon'] == 3): ?>
															<i class="fab fa-5x fa-css3-alt"></i> CSS
	                                                	<?php elseif ($value['CategorieIcon'] == 4): ?>
															<i class="fas fa-5x fa-bold"></i> Bootstrap
	                                                	<?php elseif ($value['CategorieIcon'] == 5): ?>
															<i class="fab fa-5x fa-java"></i> Java
	                                                	<?php endif ?>
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
	                                            	<input type="text" name="userID" class="d-none" value="<?= $this->session->has_userdata('UserID') ?>">
	                                            	<input type="text" name="tutorialID" class="tutorialID d-none" value="<?= $value['TutorialID'] ?>">
	                                            	<button type="button" name="button" class="btnRemoveMyCourses btn btn-link btn-round btn-danger">
	                                                   	<i class="fas fa-trash"></i> Remove This Course
	                                                	<div class="ripple-container"></div>
	                                            	<div class="ripple-container"></div></button>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
                            <?php endforeach ?>
                        </div>
                        <br><br>
                         <hr>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	$('body').on('click', '.btnRemoveMyCourses', function(event) {
		swal(
		  'Good job!',
		  'You removed this course!',
		  'success'
		);
		tutorialID = $(this).parent().children('.tutorialID').val();

		console.log(tutorialID);
		$.ajax({
			url: '<?= base_url()?>Member/Courses/delMyCourse/'+tutorialID,
			type: 'POST',
			dataType: 'json',
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
