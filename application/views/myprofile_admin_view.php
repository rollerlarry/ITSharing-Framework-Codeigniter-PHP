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
            <form method="POST" action="<?= base_url() ?>Accounts/editMyProfiel/<?= $this->session->userdata('UserID') ?>" class="form-horizontal" enctype="multipart/form-data">
            <div class="row">
              <?php foreach ($arrayDataMyProfile as $value): ?>
               <div class="cardShow col-md-12">
                <div class="card card-profile">
                  <div class="card-avatar">
                    <a href="#pablo">
                      <img class="img" src="<?= $value['UserImage'] ?>" />
                    </a>
                  </div>
                  <div class="iconupload d-none">
                    <span class="btn btn-link btn-rose btn-file">
                        <span class="fileinput-new"><i class="material-icons">cloud_upload</i></span>
                        <input type="hidden"><input type="file" name="userImage"><div class="ripple-container"></div>
                        <input type="hidden" name="userImageHidden" value="<?= $value['UserImage'] ?>"><div class="ripple-container"></div>
                    </span>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category text-gray">Administrator / ITSharing</h6>
                    <h4 class="card-title"><?= $this->session->userdata('FirstName') ?> <?= $this->session->userdata('LastName') ?></h4>
                    <p class="card-description">
                      <?= $value['About'] ?>
                    </p>
                    <a href="#pablo" class="btnEdit btn btn-rose btn-round"><li class="material-icons">edit</li> Edit</a>
                  </div>
                </div>
                    
                    
              </div>
              <div class="cardEdit col-md-8 d-none">
                <div class="card">
                  <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                      <i class="material-icons">perm_identity</i>
                    </div>
                    <h4 class="card-title">Edit Profile - <small class="category">Complete your profile</small></h4>
                  </div>
                  
                  <div class="card-body" >
                    
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label class="bmd-label-floating">UserID</label>
                            <input type="text" class="userID form-control" disabled value="<?= $value['UserID'] ?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="bmd-label-floating">Username</label>
                            <input type="text" class="form-control" disabled value="<?= $value['UserName'] ?>">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Email address</label>
                            <input type="email" class="email form-control" name="email" value="<?= $value['Email'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Fist Name</label>
                            <input type="text" class="firstName form-control" name="firstName" value="<?= $value['FirstName'] ?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Last Name</label>
                            <input type="text" class="lastName form-control" name="lastName" value="<?= $value['LastName'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Adress</label>
                            <input type="text" class="address form-control" name="address" value="<?= $value['Address'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">City</label>
                            <input type="text" class="city form-control" name="city" value="<?= $value['City'] ?>">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Country</label>
                            <input type="text" class="country form-control" name="country" value="<?= $value['Country'] ?>">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Postal Code</label>
                            <input type="text" class="postalCode form-control" name="postalCode" value="<?= $value['PostalCode'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>About Me</label>
                            <div class="form-group">
                              <textarea class="about form-control" name="about" rows="5"><?= $value['About'] ?></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="btnClose btn btn-info pull-right"><span class="material-icons">clear</span> Close</span> 
                      <button type="button" class="btnUpdate btn btn-rose pull-right"><span class="material-icons">save</span> Update Profile</button>

                      <div class="clearfix"></div>
                    
                  </div>
                </div>
              </div>

              <?php endforeach ?>
            </div>
          </div>
           </form>
        </div>
      </div>
    </body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
      $('body').on('click', '.btnEdit', function(event) {
        $('.cardShow').removeClass('col-md-12');
        $('.cardShow').addClass('col-md-4');
        $('.cardEdit').removeClass('d-none');
        $('.iconupload').removeClass('d-none');

      });
      $('body').on('click', '.btnClose', function(event) {

        $('.cardEdit').addClass('d-none');
        $('.cardShow').removeClass('col-md-4');
        $('.cardShow').addClass('col-md-12');
        $('.iconupload').addClass('d-none');
      });

      $('body').on('click', '.btnUpdate', function(event) {
        var userID = $('.userID').val();
        var email = $('.email').val();
        var firstName = $('.firstName').val();
        var lastName = $('.lastName').val();
        var address = $('.address').val();
        var city = $('.city').val();
        var country = $('.country').val();
        var postalCode = $('.postalCode').val();
        var about = $('.about').val();

        $.ajax({
          url: '<?= base_url() ?>/Accounts/editMyProfiel/'+userID,
          type: 'POST',
          dataType: 'json',
          data: {
            email: email,
            firstName: firstName,
            lastName: lastName,
            address: address,
            city: city,
            country: country,
            postalCode: postalCode,
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
        swal("Good job!", "Update my profile successfuly", "success");
        
        
      });

    </script>
    <!--   Core JS Files   -->
    <?php require('widget_admin/bottom.php') ?>
  </html>