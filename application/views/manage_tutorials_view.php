<!DOCTYPE html>
<html lang="en">
  
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
            
              <h3>Manage Tutorials (<?= $countListTutorials ?>)</h3>
              
              <br>
              <div class="row">
                <div class="col-md-12 ">
                    <div class="controls pull-left">
                        <a class="btn btn-success" href="<?= base_url() ?>addTutorial"><span class="material-icons">add</span> ADDNEW Tutorials</a>
                        <a class="btn btn-info" href="<?= base_url() ?>myTutorialsUpload"><span class="material-icons">account_circle</span> My Tutorials Upload</a>
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
                        <img class="img" style="height: 300px" src="<?= $value['TutorialImage'] ?>">
                      </a>
                    </div>
                    <div class="card-body">
                      <div class="card-actions text-center">
                        <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                        </button>
                        <a href="<?= base_url() ?>TutorialsDetail/<?= $value['TutorialID'] ?>" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="View detail">
                        <i class="material-icons">art_track</i>
                        </a>
                        <a class="btnFastEdit btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Fast edit "><i class="material-icons">edit</i></a>
                        <a data-href="<?= $value['TutorialID'] ?>" class="btnSave btn btn-success btn-link d-none" rel="tooltip" data-placement="bottom" title="Save " onclick="demo.showNotificationSuccess('bottom','right')"><i class="material-icons">save</i></a>
                        <?php if ($value['TutorialStatus'] == 0): ?>
                          <a data-href="<?= $value['TutorialID'] ?>" class="btnLock btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Pulbic - Click to Private"><i class="material-icons">lock_open</i></a>
                        <?php else: ?>
                          <a data-href="<?= $value['TutorialID'] ?>" class="btnUnLock btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Private - Click to Public"><i class="material-icons">lock</i></a>
                        <?php endif ?>
                          <a data-href="<?= $value['TutorialID'] ?>" class="btnUnLock btn btn-danger btn-link d-none" rel="tooltip" data-placement="bottom" title="Private - Click to Public"><i class="material-icons">lock</i></a>
                          <!-- <a data-href="<?= $value['TutorialID'] ?>" class="btnLock btn btn-success btn-link d-none" rel="tooltip" data-placement="bottom" title="Pulbic - Click to Private"><i class="material-icons">lock_open</i></a> -->
                      </div>
                      <h4 class="card-title">
                        <a class="showTutorialTitle" href="<?= base_url() ?>Tutorials/detailTutorial/<?= $value['TutorialID'] ?>"><?= $value['TutorialTitle'] ?></a>
                        <textarea class="inputTutorialTitle form-control d-none" type="text" name="tutorialTitle" rows="2"><?= $value['TutorialTitle'] ?></textarea>
                      </h4>
                      <div class="card-description">
                        <div class="showTutorialDescription"><?= $value['TutorialDescription'] ?></div>
                        <textarea class="inputTutorialDescription form-control d-none" type="text" name="tutorialDescription" rows="6"><?= $value['TutorialDescription'] ?></textarea>
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
      $('body').on('click', '.btnLock', function(event) {
        var tutorialID = $(this).data('href');
        $.ajax({
          url: '<?= base_url() ?>Tutorials/privateTutorial/'+tutorialID,
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

        $(this).addClass('d-none');
        $(this).parent().children('.btnUnLock').removeClass('d-none');
        
        
      });
      $('body').on('click', '.btnUnLock', function(event) {
        var tutorialID = $(this).data('href');
        $.ajax({
          url: '<?= base_url() ?>Tutorials/publicTutorial/'+tutorialID,
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

        $(this).addClass('d-none');
        $(this).parent().children('.btnLock').removeClass('d-none');
        
        
      });
    </script>
    <!--   Core JS Files   -->
    <?php require('widget_admin/bottom.php') ?>
  </html>