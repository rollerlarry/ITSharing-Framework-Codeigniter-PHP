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
              <?php foreach ($arrayDataTutorial as $valueone): ?>

              <div class="col-md-6">
                <div class="card">
                  <div class="card-header card-header-icon card-header-info">
                    <div class="card-text">
                      <h4 class="card-title"><?= $valueone['CategorieName'] ?></h4>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="text-center">
                      <img class="img-thumbnail" src="<?= $valueone['TutorialImage'] ?>">
                      <h3><?= $valueone['TutorialTitle'] ?></h3><small>(<i class="fa fa-eye" aria-hidden="true"></i> <?= $valueone['TutorialView'] ?> view)</small>
                      
                    </div>
                    <div class="text-center">
                       <span class="btn btn-success btn-lg"><i class="fas fa-link"></i> Link Tutorial</span>
                       <div class="card-body">
                          <a target="_blank" href="<?= $valueone['TutorialURL'] ?>"><div class="btn btn-default btn-round"><i class="fab fa-google-plus-g"></i> GGDriver</div></a>
                          <?php if ($valueone['TutorialURL2'] != NULL): ?>
                            <a  target="_blank" href="<?= $valueone['TutorialURL2'] ?>"><div class="btn btn-facebook btn-round"><i class="fas fa-share-alt"></i> Fshare</div></a>
                          <?php endif ?>
                          <?php if ($valueone['TutorialURL3'] != NULL): ?>
                            <a  target="_blank" href="<?= $valueone['TutorialURL3'] ?>"><div class="btn btn-danger btn-round"><i class="fab fa-megaport"></i> Mega</div></a>
                          <?php endif ?>
                      </div>
                    </div>
                    </div>
                    <div class="card-footer"> 
                      <button class="btnEdit btn btn-warning pull-right"><span class="material-icons">edit</span> Edit Tutorial</button>
                      <button type="submit" data-href="<?= $valueone['TutorialID'] ?>" class="btnDel btn btn-danger pull-right"><span class="material-icons">delete_forever</span> Delete Tutorial</button>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card card-profile">
                    <div class="card-avatar">
                      <a href="#pablo">
                        <img class="img" src="<?= $valueone['UserImage'] ?>" />
                      </a>
                    </div>
                    <div class="card-body">
                      <h6 class="card-category text-gray">Uploader</h6>
                      <h4 class="card-title"><?= $valueone['FirstName'] ?> <?= $valueone['LastName'] ?></h4>
                      <p class="card-description">
                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                      </p>
                      <a href="<?= base_url() ?>Accounts/detailAccount/<?= $valueone['UserID'] ?>" class="btn btn-rose btn-round"><span class="material-icons">local_see</span> Show Profile</a>
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
                                <h4 class="card-title">List Tutorial Upload by <?= $valueone['FirstName'] ?> <?= $valueone['LastName'] ?></h4>
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

                <div class="formEdit col-md-12 d-none" >
                      <div class="card ">
                        <div class="card-header card-header-rose card-header-text">
                          <div class="card-text">
                            <h4 class="card-title">EDIT Tutorial</h4>
                          </div>
                        </div>
                        <div class="card-body ">
                          <form method="POST" action="<?= base_url() ?>Tutorials/editTutorial/<?= $valueone['TutorialID'] ?>">
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Tutorial Title</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="tutorialTitle form-control" type="text" name="tutorialTitle" required="true" value="<?= $valueone['TutorialTitle'] ?>" />
                                <input type="text" name="tutorialID" class="tutorialID d-none" value="<?= $valueone['TutorialID'] ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Tutorial Description</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="tutorialDescription form-control" type="text" name="tutorialDescription" required="true" value="<?= $valueone['TutorialDescription'] ?>"/>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Tutorial Image</label>
                            <div class="col-sm-7">
                              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="<?= $valueone['TutorialImage'] ?>" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>

                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="tutorial-image">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                                <?php if ($error = $this->session->flashdata('tutorial_image_null')): ?>
                                  <p style="color: red">Image for the tutorial can not be empty.</p>
                                <?php endif ?>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Tutorial Language</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <?php if ($valueone['TutorialLanguage'] == "English"): ?>
                                    <div class="col-sm-10 checkbox-radios">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="tutorialLanguage form-check-input" type="radio" name="tutorialLanguage" value="English" checked="">
                                          English
                                          <span class="circle">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="tutorialLanguage form-check-input" type="radio" name="tutorialLanguage" value="Vietnamese">
                                          Vietnamese
                                          <span class="circle">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </div>
                                <?php else: ?>
                                    <div class="col-sm-10 checkbox-radios">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="tutorialLanguage form-check-input" type="radio" name="tutorialLanguage" value="English" >
                                          English
                                          <span class="circle">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="tutorialLanguage form-check-input" type="radio" name="tutorialLanguage" value="Vietnamese" checked="">
                                          Vietnamese
                                          <span class="circle">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </div>
                                <?php endif ?>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Tutorial Levels</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <?php if ($valueone['TutorialLevel'] == "Basic"): ?>
                                    <div class="col-sm-10 checkbox-radios">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="tutorialLevel form-check-input" type="radio" name="tutorialLevel" value="Basic" checked="">
                                          Basic
                                          <span class="circle">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="tutorialLevel form-check-input" type="radio" name="tutorialLevel" value="Advance">
                                          Advance
                                          <span class="circle">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </div>
                                <?php else: ?>
                                    <div class="col-sm-10 checkbox-radios">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="tutorialLevel form-check-input" type="radio" name="tutorialLevel" value="Basic" >
                                          Basic
                                          <span class="circle">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="tutorialLevel form-check-input" type="radio" name="tutorialLevel" value="Advance" checked="">
                                          Advance
                                          <span class="circle">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </div>
                                <?php endif ?>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Link Download GGDriver(Url)</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="tutorialURL form-control" type="text" name="tutorialURL" url="true.html" required="true" value="<?= $valueone['TutorialURL'] ?>"/>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Link Download Fshare(Url)</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="tutorialURL2 form-control" type="text" name="tutorialURL2" url="true.html" value="<?= $valueone['TutorialURL2'] ?>" />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Link Download Mega(Url)</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="tutorialURL3 form-control" type="text" name="tutorialURL3" url="true.html" value="<?= $valueone['TutorialURL3'] ?>"/>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-4 col-form-label"><span class="text-danger"> Note: Need at least one link for tutorial (Default link GGDriver)</span></label>
                          </div>
                          <br>
                           <div class="row">
                            <label class="col-sm-2 col-form-label">Tutorial Categorie</label>
                            <div class="col-sm-3">
                              <div class="dropdown">
                                  <select class="categorieID selectpicker" name="categorieID" data-size="7" data-style="btn btn-rose btn-round" title="<?= $valueone['CategorieName'] ?>" value="<?= $valueone['CategorieID'] ?>">
                                     <?php foreach ($arrayDataCategories as $value): ?>
                                      <option class="dropdown-item" value="<?= $value['CategorieID'] ?>"><?= $value['CategorieName'] ?></option>
                                      <?php endforeach ?>
                                  </select>
                                  <input type="text" class="inputcategorieID d-none" name="inputcategorieID" value="<?= $value['CategorieID'] ?>">
                                   <a class="btn btn-link btn-twitter" href="<?= base_url() ?>Tutorials/manageCategories"><span class="material-icons">add</span> NEW Categorie</a>
                                  <?php if ($error = $this->session->flashdata('categorie_null')): ?>
                                    <p style="color: red">Categorie for the tutorial can not be empty.</p>
                                  <?php endif ?>
                              </div>
                            </div>
                            <div class="col-sm-3">
                           </div>
                          </div>
                        </div>
                         </form>
                        <div class="card-footer ">
                            <a href=""> <button class="btnBack btn btn-fill btn-warning d-none"><span class="material-icons">keyboard_backspace</span> Back</button></a>
                            <button class="btnSave btn btn-fill btn-success"><span class="material-icons">save</span> Save Changes</button>
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
            $('body').on('click', '.btnEdit', function(event) {
              $('.col-md-6').addClass('d-none');
              $('.formEdit').removeClass('d-none');

            });

            $('body').on('click', '.btnSave', function(event) {
              $('.btnBack').removeClass('d-none');
              // $('.formEdit').addClass('d-none');
              tutorialTitle = $('.tutorialTitle').val();
              tutorialDescription = $('.tutorialDescription').val();
              tutorialURL = $('.tutorialURL').val();
              tutorialURL2 = $('.tutorialURL2').val();
              tutorialURL3 = $('.tutorialURL3').val();
              tutorialLanguage = $('input[name=tutorialLanguage]:checked').val();
              tutorialLevel = $('input[name=tutorialLevel]:checked').val();
              categorieID = $('.categorieID option:selected').val();
              tutorialID = $('.tutorialID').val();

              if (categorieID == "") {
                  categorieID = $('.inputcategorieID').val();
              }



              // console.log(tutorialTitle);
              // console.log(tutorialDescription);
              // console.log(tutorialURL);
              // console.log(tutorialURL2);
              // console.log(tutorialURL3);
              // console.log(tutorialLanguage);
              // console.log(tutorialLevel);
              console.log(categorieID);


              $.ajax({
                url: '<?= base_url() ?>Tutorials/editTutorial/'+tutorialID,
                type: 'POST',
                dataType: 'json',
                data: {
                  tutorialTitle: tutorialTitle,
                  tutorialDescription: tutorialDescription,
                  tutorialURL: tutorialURL,
                  tutorialURL2: tutorialURL2,
                  tutorialURL3: tutorialURL3,
                  tutorialLanguage: tutorialLanguage,
                  tutorialLevel: tutorialLevel,
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
              swal("Good job!", "You clicked the button!", "success");
              

            });
          </script>
          <!--   Core JS Files   -->
          <?php require('widget_admin/bottom.php') ?>
        </html>