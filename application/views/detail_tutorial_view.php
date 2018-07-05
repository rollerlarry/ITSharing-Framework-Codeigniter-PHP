<!DOCTYPE html>
<html lang="en">
  
  <!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 09:36:34 GMT -->
  <?php require('widget_admin/header.php') ?>
  <body class="">
    <div class="wrapper">
      <?php require('widget_admin/siderbar.php') ?>
      <div class="main-panel">
        <!-- Navbar -->
        <?php require('widget_admin/navbar.php') ?>
        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <?php foreach ($arrayDataTutorial as $value): ?>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header card-header-icon card-header-info">
                    <div class="card-text">
                      <h4 class="card-title"><?= $value['CategorieName'] ?></h4>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="text-center">
                      <img class="img-thumbnail" src="<?= $value['TutorialImage'] ?>">
                      <h3><?= $value['TutorialTitle'] ?></h3><small>(<i class="fa fa-eye" aria-hidden="true"></i> <?= $value['TutorialView'] ?> view)</small>
                      
                    </div>
                    <div class="text-center">
                       <span class="btn btn-success btn-lg"><i class="fas fa-link"></i> Link Tutorial</span>
                       <div class="card-body">
                          <a target="_blank" href="<?= $value['TutorialURL'] ?>"><div class="btn btn-default btn-round"><i class="fab fa-google-plus-g"></i> GGDriver</div></a>
                          <?php if ($value['TutorialURL2'] != NULL): ?>
                            <a href=""><div class="btn btn-facebook btn-round"><i class="fas fa-share-alt"></i> Fshare</div></a>
                          <?php endif ?>
                          <?php if ($value['TutorialURL3'] != NULL): ?>
                            <a href=""><div class="btn btn-danger btn-round"><i class="fab fa-megaport"></i> Mega</div></a>
                          <?php endif ?>
                      </div>
                    </div>
                      
                    </div>
                    <div class="card-footer"> 
                      <button class="btn btn-warning pull-right"><span class="material-icons">edit</span> Edit Tutorial</button>
                      <button type="submit" data-href="<?= $value['TutorialID'] ?>" class="btnDel btn btn-danger pull-right"><span class="material-icons">delete_forever</span> Delete Tutorial</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-profile">
                    <div class="card-avatar">
                      <a href="#pablo">
                        <img class="img" src="<?= $value['UserImage'] ?>" />
                      </a>
                    </div>
                    <div class="card-body">
                      <h6 class="card-category text-gray">Uploader</h6>
                      <h4 class="card-title"><?= $value['FirstName'] ?> <?= $value['LastName'] ?></h4>
                      <p class="card-description">
                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                      </p>
                      <a href="<?= base_url() ?>Accounts/detailAccount/<?= $value['UserID'] ?>" class="btn btn-rose btn-round"><span class="material-icons">local_see</span> Show Profile</a>
                      <a href="#pablo" class="btn btn-info btn-round" data-toggle="modal" data-target="#noticeModal" ><span class="material-icons" >call</span> Contact</a>
            
                      <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-notice">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">How Do You Become an Affiliate?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              <i class="material-icons">close</i>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="instruction">
                                <div class="row">
                                    <div class="col-md-8">
                                         <strong>1. Register</strong>
                                         <p class="description">The first step is to create an account at <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="picture">
                                            <img src="<?= base_url() ?>assets_admin/assets/img/card-1.jpg" alt="Thumbnail Image"  class="rounded img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="instruction">
                                <div class="row">
                                    <div class="col-md-8">
                                            <strong>2. Apply</strong>
                                            <p class="description">The first step is to create an account at <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="picture">
                                            <img src="<?= base_url() ?>assets_admin/assets/img/card-2.jpg" alt="Thumbnail Image"  class="rounded img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>If you have more questions, don't hesitate to contact us or send us a tweet @creativetim. We're here to help!</p>
                          </div>
                          <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Sounds good!</button>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12">
                          <div class="card">
                            <div class="card-header card-header-text card-header-rose">
                              <div class="card-text">
                                <h4 class="card-title">List Tutorial Upload by <?= $value['FirstName'] ?> <?= $value['LastName'] ?></h4>
                                <p class="card-category">Update on 15th September, 2018</p>
                              </div>
                            </div>
                            <div class="card-body table-responsive">
                              <table class="table table-hover">
                                <tr>
                                  <th>TutorialName</th>
                                  <th>UploadTime</th>
                                </tr>
                                <tbody>
                                  <?php foreach ($arrayDataTutorialForUser as $value): ?>
                                     <tr>
                                      <td><a href="<?= base_url() ?>/Tutorials/detailTutorial/<?= $value['TutorialID'] ?>"><?= $value['TutorialTitle'] ?></a></td>
                                      <td><?= date('d-m-Y',$value['TutorialDateUpload']) ?></td>
                                    </tr>
                                  <?php endforeach ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach ?>
              </div>
            </div>
          </body>
          <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
          <script>
            $('body').on('click', '.btnDel', function(event) {
                tutorialID = $(this).data('href');
                console.log(tutorialID);
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    confirmButtonText: 'Yes, delete it!',
                    buttonsStyling: false
                }).then(function() {
                    $.ajax({
                      url: '<?= base_url() ?>Tutorials/delTutorial/'+tutorialID,
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
                      object.remove();
                    });
                    swal({
                        title: 'Deleted!',
                        text: 'Your file has been deleted.',
                        type: 'success',
                        confirmButtonClass: "btn btn-success",
                        buttonsStyling: false
                    })
                    window.location="<?= base_url() ?>Tutorials/manageTutorials"
                }).catch(swal.noop)
              event.preventDefault();
              /* Act on the event */
            });
          </script>
          <!--   Core JS Files   -->
          <?php require('widget_admin/bottom.php') ?>
        </html>