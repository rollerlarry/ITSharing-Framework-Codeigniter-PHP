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
              <?php foreach ($arrayDataAccount as $value): ?>
              <div class="col-md-12">
                <form method="POST" action="<?= base_url() ?>Accounts/editDetailAccount/<?= $value['UserID'] ?>" class="form-horizontal" enctype="multipart/form-data">
                <div class="card ">
                  <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                      <h4 class="card-title">Account Details </h4>
                    </div>
                    <div class="card card-profile">
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="card-avatar">
                              <img  class="img" src="<?= $value['UserImage'] ?>">
                              </div>
                          <div class="fileinput-preview fileinput-exists thumbnail img-thumbnail" style=""></div>
                          <div>
                              <span class="btn btn-link btn-rose btn-file">
                                  <span class="fileinput-new"><i class="material-icons">cloud_upload</i></span>
                                  <!-- <span class="fileinput-exists">Change</span> -->
                                  <input type="hidden"><input type="file" name="userImage"><div class="ripple-container"></div>
                                  <input type="hidden" name="userImageHidden" value="<?= $value['UserImage'] ?>"><div class="ripple-container"></div>
                                </span>

                              <br>
                              <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                          </div>
                      </div>
                      <div class="card-body">
                        <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                        <h4 class="card-title"><?= $value['FirstName'] ?> <?= $value['LastName'] ?></h4>
                        <p class="text">
                          Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>
                        <a href="#pablo" class="btn btn-info btn-round"><i class="material-icons">call</i> Contact</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body ">
                    
                      <div class="row">
                        <label class="col-sm-2 col-form-label">UserID</label>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <input type="text" class="form-control" value="<?= $value['UserID'] ?>" disabled>
                          </div>
                        </div>
                        <label class="col-sm-1 col-form-label">UserName</label>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <input type="text" class="form-control" value="<?= $value['UserName'] ?>" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">FirstName</label>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <input type="text" name="firstName" class="form-control" value="<?= $value['FirstName'] ?>" >
                          </div>
                        </div>
                        <label class="col-sm-1 col-form-label">LastName</label>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <input type="text" name="lastName" class="form-control" value="<?= $value['LastName'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <div class="form-group">
                            <input type="text" name="email" class="form-control" value="<?= $value['Email'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-8">
                          <div class="form-group">
                            <input type="text" name="address" class="form-control" value="<?= $value['Address'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-2">
                          <div class="form-group">
                            <input type="text" name="city" class="form-control" value="<?= $value['City'] ?>">
                          </div>
                        </div>
                        <label class="col-sm-1 col-form-label">Country</label>
                        <div class="col-sm-2">
                          <div class="form-group">
                            <input type="text" name="country" class="form-control" value="<?= $value['Country'] ?>">
                          </div>
                        </div>
                        <label class="col-sm-1 col-form-label">PostalCode</label>
                        <div class="col-sm-2">
                          <div class="form-group">
                            <input type="text" name="postalCode" class="form-control" value="<?= $value['PostalCode'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">Account Level</label>
                        <div class="col-sm-10 checkbox-radios">
                          <?php if ($value['UserLevel'] == 1): ?>
                            <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="userLevel" value="1" checked>
                              Administrator
                              <span class="circle">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="userLevel" value="0" >
                              Member
                              <span class="circle">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                          <?php else: ?>
                            <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="userLevel" value="1" >
                              Administrator
                              <span class="circle">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="userLevel" value="0" checked >
                              Member
                              <span class="circle">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                          <?php endif ?>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">About</label>
                        <div class="col-sm-8">
                          <div class="form-group">
                            <div class="form-group bmd-form-group">
                              <textarea class="form-control" name="about" rows="5"><?= $value['About'] ?></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="card-footer ">
                      <a href="<?= base_url() ?>ListAccounts" class="btn btn-fill btn-info"><span class="material-icons">arrow_back_ios</span> Back ManageAccounts</a>
                      <button type="submit" class="btnUpdate btn btn-fill btn-success"><span class="material-icons">system_update</span> Update Account</button>
                    </div>
                </div>
              </div>
              <?php endforeach ?>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if ($error = $this->session->flashdata('update_account_success')): ?>
        <script>
          swal("Good job!", "Update account successfuly!", "success");
        </script>
    <?php endif ?>
  <!--   Core JS Files   -->
  <?php require('widget_admin/bottom.php') ?>
</html>