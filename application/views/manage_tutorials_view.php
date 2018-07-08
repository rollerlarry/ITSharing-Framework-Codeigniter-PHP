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
            
            <!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
            7 days
            </button> -->
           
            
              <h3>Manage Tutorials (<?= $countListTutorials ?>)</h3>
              
              <br>
              <div class="row">
                <div class="col-md-12 ">
                    <div class="controls pull-left">
                        <a class="btn btn-success" href="<?= base_url() ?>Tutorials/addTutorial"><span class="material-icons">add</span> ADDNEW Tutorials</a>
                        <a class="btn btn-info" href="<?= base_url() ?>Tutorials/myTutorialsUpload"><span class="material-icons">account_circle</span> My Tutorials Upload</a>
                    </div>
                </div>
              </div>
              <br>
              <div class="row">
                <?php foreach ($arrayDataTutorials as $value): ?>
                  
                
                <div class="col-md-4">
                  <div class="card card-product">
                    <div class="card-header card-header-image" data-header-animation="true">
                      <a href="#pablo">
                        <img class="img" src="<?= $value['TutorialImage'] ?>">
                      </a>
                    </div>
                    <div class="card-body">
                      <div class="card-actions text-center">
                        <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                        </button>
                        <a href="<?= base_url() ?>Tutorials/detailTutorial/<?= $value['TutorialID'] ?>" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="View detail">
                        <i class="material-icons">art_track</i>
                        </a>
                        <a class="btnFastEdit btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Fast edit "><i class="material-icons">edit</i></a>
                        <a data-href="<?= $value['TutorialID'] ?>" class="btnSave btn btn-success btn-link d-none" rel="tooltip" data-placement="bottom" title="Save " onclick="demo.showNotificationSuccess('bottom','right')"><i class="material-icons">save</i></a>
                        <?php if ($value['TutorialStatus'] == 0): ?>
                          <a href="<?= base_url() ?>Tutorials/privateTutorial/<?= $value['TutorialID'] ?>" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Pulbic - Click to Private"><i class="material-icons">lock_open</i></a>
                        <?php else: ?>
                           <a href="<?= base_url() ?>Tutorials/publicTutorial/<?= $value['TutorialID'] ?>" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Private - Click to Public"><i class="material-icons">lock</i></a>
                        <?php endif ?>
                      </div>
                      <h4 class="card-title">
                        <a class="showTutorialTitle" href="<?= base_url() ?>Tutorials/detailTutorial/<?= $value['TutorialID'] ?>"><?= $value['TutorialTitle'] ?></a>
                        <input class="inputTutorialTitle form-control d-none" type="text" name="tutorialTitle" value="<?= $value['TutorialTitle'] ?>">
                      </h4>
                      <div class="card-description">
                        <div class="showTutorialDescription"><?= $value['TutorialDescription'] ?></div>
                        <input class="inputTutorialDescription form-control d-none" type="text" name="tutorialDescription" value="<?= $value['TutorialDescription'] ?>">
                      </div>
                      <div class="card-description">
                        <div class="raiting">
                          <?php 
                            $like = $value['TutorialLike'];
                            $dontlike =  $value['TutorialDontLike']; 

                            $tLikeAndDonLike = $like + $dontlike;

                            if ($tLikeAndDonLike != NULL) {
                                $slike = ceil(($like/$tLikeAndDonLike)*5);
                                $sdontlike = 5 - $slike;
                            
                              for ($i = 1; $i <= $slike ; $i++) {
                                ?>
                                  <span class="fa fa-star checked" style="color: orange"></span>
                                <?php
                              }
                              for ($i = 1; $i <= $sdontlike ; $i++) {
                                ?>
                                  <span class="fa fa-star"></span>
                                <?php
                              }
                            }else{
                                for ($i = 1; $i <= 5 ; $i++) {
                                  ?>
                                    <span class="fa fa-star"></span>
                                  <?php
                                }
                            }
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="price">
                        <a href="" class="btn btn-info"><i class="material-icons">dns</i> <?= $value['CategorieName'] ?><div class="ripple-container"></div></a>
                      </div>
                      <div class="stats">
                        <p class="card-category"><i class="material-icons">access_time</i> <?= date('d-m-Y',$value['TutorialDateUpload']) ?></p>
                      </div>
                      <div class="stats">
                        <p class="card-category"><i class="material-icons">cloud_upload</i> <?= $value['FirstName'] ?> <?= $value['LastName'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
          <?php require('widget_admin/footer.php') ?>
        </div>
      </div>
    </div>
    </body>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script>
      $('body').on('click', '.btnFastEdit', function(event) {
        $(this).addClass('d-none');
        $(this).parent().children('.btnSave').removeClass('d-none');
        $(this).parent().parent().children('.card-title').children('.showTutorialTitle').addClass('d-none');
        $(this).parent().parent().children('.card-description').children('.showTutorialDescription').addClass('d-none');

        $(this).parent().parent().children('.card-title').children('.inputTutorialTitle').removeClass('d-none');
        $(this).parent().parent().children('.card-description').children('.inputTutorialDescription').removeClass('d-none');
        
      });

      $('body').on('click', '.btnSave', function(event) {
        $(this).addClass('d-none');
        $(this).parent().children('.btnFastEdit').removeClass('d-none');
        $(this).parent().parent().children('.card-title').children('.showTutorialTitle').removeClass('d-none');
        $(this).parent().parent().children('.card-description').children('.showTutorialDescription').removeClass('d-none');

        $(this).parent().parent().children('.card-title').children('.inputTutorialTitle').addClass('d-none');
        $(this).parent().parent().children('.card-description').children('.inputTutorialDescription').addClass('d-none');

        tutorialID = $(this).data('href');
        tutorialTitleInput = $(this).parent().parent().children('.card-title').children('.inputTutorialTitle').val();
        tutorialDescriptionInput = $(this).parent().parent().children('.card-description').children('.inputTutorialDescription').val();


        $(this).parent().parent().children('.card-title').children('.showTutorialTitle').html(tutorialTitleInput);
        $(this).parent().parent().children('.card-description').children('.showTutorialDescription').html(tutorialDescriptionInput);

        $.ajax({
          url: '<?= base_url() ?>Tutorials/fastEditTutorial/'+tutorialID,
          type: 'POST',
          dataType: 'json',
          data: {
            tutorialTitle: tutorialTitleInput,
            tutorialDescription: tutorialDescriptionInput
          },
        })
        .done(function() {
          // console.log("success");
        })
        .fail(function() {
          // console.log("error");
        })
        .always(function() {
          // console.log("complete");
        });
        
        
      });
    </script>
    <!--   Core JS Files   -->
    <?php require('widget_admin/bottom.php') ?>
  </html>