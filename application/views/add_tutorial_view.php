<!DOCTYPE html>
<html lang="en">
  
  <!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 09:36:34 GMT -->
  <?php require('widget_admin/header.php') ?>
  <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
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
              <div class="col-md-12">
                <form id="TypeValidation" class="form-horizontal" action="<?= base_url() ?>Tutorials/addNewTutorial" method="POST" enctype="multipart/form-data">
                  <div class="card ">
                    <div class="card-header card-header-rose card-header-text">
                      <div class="card-text">
                        <h4 class="card-title">NEW Tutorial</h4>
                      </div>
                    </div>
                    <div class="card-body ">
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Tutorial Title</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <input class="form-control" type="text" name="tutorial-title" required="true" />
                            <p id="showNotification" class="text-danger d-none"></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Tutorial Description</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <input class="form-control" type="text" name="tutorial-description" required="true" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Tutorial Image</label>
                        <div class="col-sm-7">
                          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="<?= base_url() ?>assets_admin/assets/img/image_placeholder.jpg" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>

                                        <span class="fileinput-exists">Change</span>
                                        <input class="inputImage" type="file" name="tutorial-image">
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
                        <label class="col-sm-2 col-form-label">Tutorial Categorie</label>
                        <div class="col-sm-3">
                          <div class="dropdown">
                              <select class="selectpicker" name="tutorial-categorie" data-size="7" data-style="btn btn-rose btn-round" title="Single Select">
                                 <?php foreach ($arrayDataCategories as $value): ?>
                                  <option class="dropdown-item" value="<?= $value['CategorieID'] ?>"><?= $value['CategorieName'] ?></option>
                                  <?php endforeach ?>
                              </select>
                               <a class="btn btn-link btn-twitter" href="<?= base_url() ?>Tutorials/manageCategories"><span class="material-icons">add</span> NEW Categorie</a>
                              <?php if ($error = $this->session->flashdata('categorie_null')): ?>
                                <p style="color: red">Categorie for the tutorial can not be empty.</p>
                              <?php endif ?>
                          </div>
                        </div>
                        <div class="col-sm-3">
                       </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Tutorial Language</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <div class="col-sm-10 checkbox-radios">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tutorialLanguage" value="English" checked="">
                                  English
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <br>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tutorialLanguage" value="Vietnamese">
                                  Vietnamese
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Tutorial Levels</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <div class="col-sm-10 checkbox-radios">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tutorialLevel" value="Basic" checked="">
                                  Basic
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <br>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tutorialLevel" value="Advance">
                                  Advance
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Link Download GGDriver(Url)</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <input class="form-control" type="text" name="tutorial-url" url="true.html" required="true" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Link Download Fshare(Url)</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <input class="form-control" type="text" name="tutorial-url2" url="true.html" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Link Download Mega(Url)</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <input class="form-control" type="text" name="tutorial-url3" url="true.html" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-4 col-form-label"><span class="text-danger"> Note: Need at least one link for tutorial (Default link GGDriver)</span></label>
                      </div>
                    </div>
                    <div class="card-footer ">
                        <a href="<?= base_url() ?>ListTutorials" class="btn btn-fill btn-info"><span class="material-icons">arrow_back_ios</span> Back ManageTutorials</a>
                        <button class="btnAdd btn btn-fill btn-info"><span class="material-icons">playlist_add</span> AddNew Tutorial</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if ($error = $this->session->flashdata('not_type')): ?>
        <script>
          swal("Something wrong!", "Sorry, only JPG, JPEG, PNG & GIF files are allowed.", "error");
        </script>
    <?php endif ?>
    <?php if ($error = $this->session->flashdata('file_to_large')): ?>
        <script>
          swal("Something wrong!", "Sorry, your file is too large.", "error");
        </script>
    <?php endif ?>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
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
        
      });

      $(this).on('click', '.btnAdd', function(event) {
        console.log('123');
      });
    </script>
    <!--   Core JS Files   -->
    <?php require('widget_admin/bottom.php') ?>
  </html>