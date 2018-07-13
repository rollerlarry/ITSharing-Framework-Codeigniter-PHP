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
        <?php redirect(base_url().'Home','refresh') ?>
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
                <?php foreach ($arrayDataProfile as $value): ?>
                    
                
                <br>
                <div class="row">
                    <div class="col-md-3 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <div class="text-center">
                                    <img src="<?= $value['UserImage'] ?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                                </div>
                            </div>
                            <div class="name">
                                <div class="text-center">
                                    <h3 class="fullName title"><?= $value['FirstName'] ?> <?= $value['LastName'] ?></h3>
                                    <input type="text" name="userID" class="userID d-none" value="<?= $value['UserID'] ?>">
                                    <input type="text" class="title inputFirstNameEdit form-control d-none" value="<?= $value['FirstName'] ?>">
                                    <input type="text" class="title inputLastNameEdit form-control d-none" value="<?= $value['LastName'] ?>">
                                    <button class="btnEdit fa fa-2x fa-edit text-info btn btn-link btn-info"></button>
                                    <button class="btnSave fa fa-2x fa-save text-success btn btn-link btn-success d-none"></button>
                                <h6 class="showWork">Designer</h6>
                                <input type="text" class="inputWorkEdit form-control d-none" value="Designer">
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i><div class="ripple-container"></div></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i><div class="ripple-container"></div></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i><div class="ripple-container"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description text-center">
                    <p class="showAbout"><?= $value['About'] ?></p>
                    <textarea class="inputAboutEdit form-control d-none" rows="3" id="exampleInputTextarea"><?= $value['About'] ?></textarea>
                </div>
                <br>
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-5 ml-auto mr-auto">
                            <div class="profile-tabs">
                                <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                    <!--
                          color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                      -->
                                    <li class="nav-item">
                                        <a class="nav-link active show" href="#work" role="tab" data-toggle="tab" aria-selected="true">
                                            <i class="material-icons">palette</i> OverView
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
                </div>
                <hr>
                <div class="text-center">
                    <div class="tab-content tab-space">
                    <div class="tab-pane work active show" id="work">
                        <div class="row">
                            <div class="col-md-7 ml-auto mr-auto ">
                                <h4 class="title">Latest Courses</h4>
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
                                        <b>60</b> Courses Upload</li>
                                    <li>
                                        <b>4</b> Friends</li>
                                    <li>
                                        <b>1.2K</b> Likes</li>
                                </ul>
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
                        <div class="text-center">
                            
                        </div>
                    </div>
                </div>
                </div>
                <hr>
                <?php endforeach ?>
            </div>
        </div>
        <?php require('widget_member/social.php') ?>
        <?php require('widget_member/footer.php') ?>
    </div>
    <?php require('widget_member/bottom.php') ?>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('body').on('click', '.btnEdit', function(event) {
        $('.fullName').addClass('d-none');
        $('.inputFirstNameEdit').removeClass('d-none');
        $('.inputLastNameEdit').removeClass('d-none');

        $(this).addClass('d-none');
        $('.btnSave').removeClass('d-none');

        //$('.showWork').addClass('d-none');
        //$('.inputWorkEdit').removeClass('d-none');

        $('.showAbout').addClass('d-none');
        $('.inputAboutEdit').removeClass('d-none');
    });

    $('body').on('click', '.btnSave', function(event) {
        $('.fullName').removeClass('d-none');
        $('.inputFirstNameEdit').addClass('d-none');
        $('.inputLastNameEdit').addClass('d-none');
        $(this).addClass('d-none');
        $('.btnEdit').removeClass('d-none');

        $('.showWork').removeClass('d-none');
        $('.inputWorkEdit').addClass('d-none');

        $('.showAbout').removeClass('d-none');
        $('.inputAboutEdit').addClass('d-none');

        userID = $('.userID').val();
        firstName = $('.inputFirstNameEdit').val();
        lastName = $('.inputLastNameEdit').val();
        about = $('.inputAboutEdit').val();

        $.ajax({
            url: '<?= base_url() ?>/Member/Profile/editProfile/'+userID,
            type: 'POST',
            dataType: 'json',
            data: {
                firstName: firstName,
                lastName: lastName,
                about: about,
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
        

        $('.fullName').html(firstName +' '+ lastName);
        $('.showAbout').html(about);
  

        swal(
          'Good job!',
          'You clicked the button!',
          'success'
        )
    });
</script>
</html>
