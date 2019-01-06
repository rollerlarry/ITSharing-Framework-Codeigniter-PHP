<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <?php require('widget_member/top.php') ?>
</head>
<body class="blog-posts ">
   
 
    <?php if ($this->session->has_userdata('UserID')) : ?>
	    <?php require('widget_member/navin.php') ?>   
	<?php else : ?>
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
                		<form method="POST" action="<?= base_url() ?>Search">
		                    <div class="inputSearch input-group-prepend">
		                          <button type="submit" class="btn btn-link"><i class="fab fa-4x fa-searchengin text-info"></i></button>
		                          <input type="text" name="search" class="form-control" placeholder="Search sources here ...">
		                    </div>
	                    </form>
                    	<div class="SearchAdvance input-group-prepend">
	                        <button class="btnSearchAdvance btn btn-link btn-info btn-round">Search Advance</button>
						</div>
							<div class="slSearchAdvance col-lg-3 col-md-3 col-sm-6 d-none">
								<select class="selectpicker " data-style="select-with-transition" title="Sort" data-size="7">
									<option value="2">Foobar</option>
									<option value="3">Is great</option>
								</select>
							</div>
							<div class="slSearchAdvance col-lg-3 col-md-3 col-sm-6 d-none">
								<select class="selectpicker " data-style="select-with-transition" title="Language Program" data-size="7">
									<option value="2">Foobar</option>
									<option value="3">Is great</option>
								</select>
							</div>
							<div class="slSearchAdvance col-lg-3 col-md-3 col-sm-6 d-none">
								<select class="selectpicker " data-style="select-with-transition" title="Training" data-size="7">
									<option value="2">Foobar</option>
									<option value="3">Is great</option>
								</select>
							</div>
							<div class="slSearchAdvance col-lg-3 col-md-3 col-sm-6 d-none">
								<select class="selectpicker" data-style="select-with-transition" multiple title="Categorie Courses" data-size="7">
									<option value="2">Paris </option>
									<option value="3">Bucharest</option>
									<option value="4">Rome</option>
									<option value="5">New York</option>
									<option value="6">Miami </option>
									<option value="7">Piatra Neamt</option>
									<option value="8">Paris </option>
									<option value="9">Bucharest</option>
									<option value="10">Rome</option>
									<option value="11">New York</option>
									<option value="12">Miami </option>
									<option value="13">Piatra Neamt</option>
									<option value="14">Paris </option>
									<option value="15">Bucharest</option>
									<option value="16">Rome</option>
									<option value="17">New York</option>
									<option value="18">Miami </option>
									<option value="19">Piatra Neamt</option>
								</select>
							</div>
					</div>
                  <br><br>
                  <?php if (isset($countCourseSearch)) : ?>
                  	<h4 class="title text-center text-info"><i class="fa fa fa-refresh fa-spin"></i> Have <?= $countCourseSearch ?> result for serach </h4>
                  <?php endif ?>
                <div class="cards" id="morphingCards">
                    <div class="container">
                        <div class="row">
                        	<?php foreach ($arrayDataListCourses as $value) : ?>
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
	                                                    <button type="button" data-href="<?= $value['TutorialID'] ?>" name="button" class="btnView btn btn-info btn-fill btn-round btn-rotate">
	                                                        <i class="material-icons">refresh</i> Click To View Details
	                                                   	 	<div class="ripple-container"></div>
	                                                	</button>
	                                                </div>
	                                            </div>
	                                            <div class="card-footer">
	                                                <div class="author">
	                                                    <a href="#pablo">
	                                                        <img src="<?= $value['UserImage'] ?>" alt="..." class="avatar img-raised">
	                                                        <span class="card-title"><?= $value['FirstName'] ?> <?= $value['LastName'] ?></span>
	                                                    </a>
	                                                </div>
	                                                <div class="ml-auto">
	                                                    <a href=""><i class="far fa-thumbs-up"></i></a> <?php echo (rand(10, 100)); ?> . 
	                                                	<i class="fas fa-download"></i> <?= $value['TutorialCountDownload'] ?> .  
	                                                    <i class="fas fa-cloud-upload-alt"></i> <?= date('d-m-Y', $value['TutorialDateUpload']) ?>
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
	                                                    <?php if ($this->session->has_userdata('UserID')) : ?>
	                                                    	<?php if ($value['TutorialURL'] != "") : ?>
	                                                    		<a target="_blank" href="<?= $value['TutorialURL'] ?>" data-href="<?= $value['TutorialID'] ?>" class="btnDownload btn btn-round">
			                                                        <i class="fa fa-google"></i> GGDriver
			                                                    </a>
	                                                    	<?php endif ?>

	                                                    	<?php if ($value['TutorialURL2'] != "") : ?>
	                                                    		<a target="_blank" href="<?= $value['TutorialURL2'] ?>" data-href="<?= $value['TutorialID'] ?>" class="btnDownload btn btn-round btn-facebook">
			                                                        <i class="fa fa-facebook"></i> Fshare
			                                                    </a>
	                                                    	<?php endif ?>
	                                                    	<?php if ($value['TutorialURL3'] != "") : ?>
	                                                    		<a target="_blank" href="<?= $value['TutorialURL3'] ?>" data-href="<?= $value['TutorialID'] ?>" class="btnDownload btn btn-round btn-dribbble">
			                                                        <i class="fa fa-dribbble"></i> Mega
			                                                    </a>
	                                                    	<?php endif ?>
														<?php else : ?>
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
	                                            	<?php if ($this->session->has_userdata('UserID')) : ?>
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

													<?php else : ?>
													    
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
						$uri = explode('/', $uri);
						$numberPageCurrent = end($uri);

						?>
                        <div class="row">
                        	<div class="col-md-2 ml-auto mr-auto">
                    			<ul class="pagination pagination-info">
                    				<?php if (isset($numberPage)) : ?>
                    					<?php if ($numberPageCurrent <= 1) : ?>

	                    				<?php else : ?>
	                    					<li class="page-item">
			                                    <a href="<?= base_url() ?>Home/page/<?= $numberPageCurrent - 1 ?>" class="page-link"> prev<div class="ripple-container"></div></a>
			                                </li>
	                    				<?php endif ?>
		                                <?php
												$count = 1;
												for ($i = 0; $i < $numberPage; $i++) {
													?>
		                                		<?php if ($i == $numberPageCurrent - 1) : ?>
		                                			<li class="active page-item">
					                                    <a href="" class="page-link"><?= $count++ ?></a>
					                                </li>
		                                		<?php else : ?>
		                                			<li class="page-item">
					                                    <a href="<?= base_url() ?>Home/page/<?= $count ?>" class="page-link"><?= $count++ ?><div class="ripple-container"></div></a>
					                                <li>
		                                		<?php endif ?>
		                                		
				                                <?php

																																	}
																																		?>
		                                 <?php if ($numberPageCurrent == $numberPage) : ?>
											
		                                 <?php elseif ($numberPageCurrent == 'Home') : ?>
								 			<li class="page-item">
			                                    <a href="<?= base_url() ?>Home/page/<?= $numberPageCurrent + 2 ?>" class="page-link">next <div class="ripple-container"></div></a>
			                                </li>
										 <?php else : ?>
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
                                <a class="btnAll nav-link active" href="#pill1" data-toggle="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="btnNews nav-link" href="#pill2" data-toggle="tab">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="btnBlog nav-link" href="#pill3" data-toggle="tab">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pill3" data-toggle="tab">Tech</a>
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
                <div class="news row">
                    <div class="col-md-6">
                        <div class="card card-raised card-background" style="background-image: url('<?= base_url() ?>assets/img/examples/office2.jpg')">
                            <div class="card-body">
                                <h6 class="card-category text-info">Programing Languages</h6>
                                <a href="#pablo">
                                    <h3 class="card-title">Top Programming Languages to Learn in 2018</h3>
                                </a>
                                <p class="card-description">
                                    As we code our way through 2018, let’s take a look at the programming languages that are making the greatest impact on software engineering. It is impossible to learn every language created, but this article sheds light on some of the languages that may increase your own personal developer happiness or provide future job opportunities. Let’s take a look at the top programming languages of 2018.
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
                                <h6 class="card-category text-info">Trends</h6>
                                <h3 class="card-title">The Top 7 Technology Trends for 2018</h3>
                                <p class="card-description">
                                    It is that time of the year again and 2017 is over before we knew it. The Year of Intelligence brought us a lot of progress and change; from over-hyped ICO’s to algorithms that created secret languages. As every year since 2012, I provide you with seven of the most important technology trends for 2018 to help you, and your business, prepare for the next year.
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
                                <h3 class="card-title">How many darned developers are there in the world?</h3>
                                <p class="card-description">
                                    In 2014 IDC estimated there were approximately 18.5m software developers in the world. Around 11 million of those were pros and 7.5 million hobbyists.
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
                <div class="blog row">
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="<?= base_url() ?>assets/img/examples/topdev.png">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">Hot</h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Việt Nam sẽ là điểm nóng của Blockchain trong khu vực</a>
                                </h4>
                                <p class="card-description">
                                   Theo báo cáo của TopDev, trong Q2 năm 2018, lập trình vẫn là một trong những ngành có nhu cầu tuyển dụng cao nhất. Đặc biệt hơn nữa, nhiều chuyên gia nhận định Việt Nam sẽ trở thành blockchain hub của khu vực trong thời gian tới. Với số lượng việc làm được tìm kiếm đạt mốc cao nhất trong 3 năm trở lại đây.
                                    <a href="#pablo"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="<?= base_url() ?>assets/img/examples/ai.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-success">
                                    Startups
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Trí tuệ nhân tạo đang tạo ra nhiều công việc hơn là cướp bớt việc của con người</a>
                                </h4>
                                <p class="card-description">
                                    Khi trí tuệ nhân tạo đang ngày càng “thông minh” hơn con người trong mọi lĩnh vực, Elon Musk và Bill Gates đã liên tục đưa ra tiên đoán về một ngày tận thế khi Robot sẽ hoàn toàn thay thế con người.
                                    <a href="#pablo"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="<?= base_url() ?>assets/img/examples/gg.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-danger">
                                    <i class="material-icons">trending_up</i> Enterprise
                                </h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Google nhận án phạt cao nhất lịch sử, hơn $5 tỉ đô, cho hành vi cạnh tranh bất hợp pháp</a>
                                </h4>
                                <p class="card-description">
                                    Google đã bị bắt nộp phạt 4,3 tỷ euro (5 tỷ USD / £ 3,8 tỷ USD) bởi cơ quan giám sát kinh doanh của châu Âu vì lạm dụng hệ điều hành di động Android như một công cụ chi phối của mình để củng cố tính phổ biến của các ứng dụng và dịch vụ của Google.
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
	<?php require('widget_member/login.php') ?>
	<?php require('widget_member/register.php') ?>
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
    <?php if ($error = $this->session->flashdata('login_error') || $error = $this->session->flashdata('account_lock')) : ?>
    	<script type="text/javascript">
			$(window).on('load',function(){
		        $('#loginModal').modal('show');
		    });
		</script>
    <?php endif ?>
    <?php if ($error = $this->session->flashdata('account_exist') || $error = $this->session->flashdata('error_confirmpassword')) : ?>
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
			url: '<?= base_url() ?>Member/Courses/addMyCourse',
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
	$('body').on('click', '.btnSearchAdvance', function(event) {
		$('.inputSearch').addClass('d-none');
		$('.SearchAdvance').addClass('d-none');
		$('.slSearchAdvance').removeClass('d-none');
	});
	$('body').on('click', '.btnView', function(event) {
		var tutorialID = $(this).data('href');
		console.log(tutorialID);
		$.ajax({
			url: '<?= base_url() ?>Tutorials/updateView/'+tutorialID,
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
	});
	$('body').on('click', '.btnDownload', function(event) {
		var tutorialID = $(this).data('href');
		console.log(tutorialID);
		$.ajax({
			url: '<?= base_url() ?>Tutorials/countDownload/'+tutorialID,
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

	});
	$('body').on('click', '.btnAll', function(event) {
		$('.blog').removeClass('d-none');
		$('.news').removeClass('d-none');

	});
	$('body').on('click', '.btnNews', function(event) {
		$('.blog').addClass('d-none');
		$('.news').removeClass('d-none');

	});
	$('body').on('click', '.btnBlog', function(event) {
		$('.news').addClass('d-none');
		$('.blog').removeClass('d-none');

	});
</script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script type="text/javascript">
  function setFormValidation(id){
    $(id).validate({
      highlight: function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
      },
      success: function(element) {
        $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
      },
      errorPlacement : function(error, element) {
        $(element).append(error);
      },
    });
  }
  $(document).ready(function(){
	setFormValidation('#TypeValidation');
	setFormValidation('#TypeValidationRegister');
  });
</script>
</html>
