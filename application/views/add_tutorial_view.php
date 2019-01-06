<!DOCTYPE html>
<html lang="en">
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
                <form id="submit_form" method="POST">
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
                            <input id="tutorialTitle" class="form-control" type="text" name="tutorialTitle"/>
                            <p id="showNotification" class="text-danger d-none"></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Tutorial Description</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <textarea id="tutorialDescription" class="form-control" type="text" rows="5" name="tutorialDescription"></textarea>
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
                                        <input class="inputImage" id="image_file" type="file" name="file">
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
                              <select id="tutorialCategorie" class="tutorialCategorie selectpicker" name="tutorialCategorie" data-size="7" data-style="btn btn-rose btn-round" title="Single Select">
                                 <?php foreach ($arrayDataCategories as $value): ?>
                                  <option class="dropdown-item" value="<?= $value['CategorieID'] ?>"><?= $value['CategorieName'] ?></option>
                                  <?php endforeach ?>
                              </select>
                               <a class="btn btn-link btn-twitter" href="<?= base_url() ?>ManageCategories"><span class="material-icons">add</span> NEW Categorie</a>
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
                                  <input id="tutorialLanguage" class="form-check-input" type="radio" name="tutorialLanguage" value="English" checked="" >
                                  English
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <br>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input id="tutorialLanguage" class="form-check-input" type="radio" name="tutorialLanguage" value="Vietnamese">
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
                                  <input id="tutorialLevel" class="form-check-input" type="radio" name="tutorialLevel" value="Basic" checked="">
                                  Basic
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <br>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input id="tutorialLevel" class="form-check-input" type="radio" name="tutorialLevel" value="Advance">
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
                            <input id="tutorialURL" class="form-control" type="text" name="tutorialURL" url="true.html"/>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Link Download Fshare(Url)</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <input id="tutorialURL2" class="form-control" type="text" name="tutorialURL2" url="true.html" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Link Download Mega(Url)</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            <input id="tutorialUR3L" class="form-control" type="text" name="tutorialUR3L" url="true.html" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-4 col-form-label"><span class="text-danger"> Note: Need at least one link for tutorial (Default link GGDriver)</span></label>
                      </div>
                    </div>
                    <div class="card-footer ">
                        <a href="<?= base_url() ?>ListTutorials" class="btn btn-fill btn-info"><span class="material-icons">arrow_back_ios</span> Back ManageTutorials</a>
                        <input type="button" id="btnAdd" class="btn btn-fill btn-info" value="AddNew Tutorial">
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
    
    
      
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <script>  
     $(document).ready(function(){  
          $('#btnAdd').on('click', function(e){  
              // var tutorialTitle = $('#tutorialTitle').val();
              // var tutorialDescription = $('#tutorialDescription').val();
              // var tutorialURL = $('#tutorialURL').val();
              // var inputImage = $('#inputImage').val();
              // var check = $('select option:selected').val();
              // if(tutorialTitle == '' || tutorialDescription == '' || tutorialURL == ''){
              //     swal("Something wrong!", "Sorry, All not empty.", "error");
              // }else if (inputImage == '') {
              //     swal("Something wrong!", "Sorry, please choose image.", "error");
              // }else if(check == 0){
              //     swal("Something wrong!", "Sorry, Tutorial categorie not empty.", "error");
              // }else{
                  var t = '';
                  data = new FormData();
                  data.append(t ,$('#image_file').val());
                  e.preventDefault();  
                  $.ajax({  
                      url:"<?= base_url() ?>Tutorials/addNewTutorial",  
                      method:"POST",  
                      data: t,  
                      contentType:false,  
                      //cache:false,  
                      processData:false,  
                      success:function(data)  
                      {  
                           //$('#image_preview').html(data);  
                           //$('#image_file').val('');  
                           alert(data);
                      }  
                  })
                  // swal("Good job!", "This tutorial have been upload.", "success");  
              // }
          });  
     });  
     </script>  
    <!--   Core JS Files   -->
    <?php require('widget_admin/bottom.php') ?>
  </html>