<!DOCTYPE html>
<html lang="en">
  
  <!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/tables/datatables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Apr 2018 09:41:26 GMT -->
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
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-text card-header-warning">
                    <div class="card-icon">
                      <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title"><td><i class="material-icons">supervisor_account</i></td>Member Stats</h4>

                  </div>

                  <div class="card-body">
                    <div class="toolbar">
                      <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                      <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                          <tr>
                            <th><b>#</b></th>
                            <th><b>FirstName</b></th>
                            <th><b>LastName</b></th>
                            <th><b>Email</b></th>
                            <th><b>Level</b></th>
                            <th><b>Status</b></th>
                            <th class="disabled-sorting text-right">Actions</th>
                          </tr>
                        </thead>
                        <tfoot>
                        <tr>
                          <th>#</th>
                          <th>FirstName</th>
                          <th>LastName</th>
                          <th>Email</th>
                          <th>Level</th>
                          <th>Status</th>
                          <th class="text-right">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                          <?php $number = 1 ?>
                          <?php foreach ($arrayDataAccounts as $value): ?>
                            <tr>
                              <td><?= $number++ ?></td>
                              <td class="FirstName">
                                <div class="show"><?= $value['FirstName'] ?></div>
                                <div class="input d-none"><input type="text" name="firstName" class="inputFirstName form-control" value="<?= $value['FirstName'] ?>"></div>  
                              </td>
                              <td class="LastName">
                                <div class="show"><?= $value['LastName'] ?></div>
                                <div class="input d-none"><input type="text" name="lastName" class="inputLastName form-control" value="<?= $value['LastName'] ?>"></div>  
                              </td>
                              <td class="Email">
                                <div class="show"><?= $value['Email'] ?></div>
                                <div class="input d-none"><input type="email" name="email" class="inputEmail form-control" value="<?= $value['Email'] ?>"></div>  
                              </td>
                              <td>
                                <div class="">
                                  <?php if ($value['UserLevel'] == 1): ?>
                                      Administrator
                                  <?php else: ?>
                                      Member
                                  <?php endif ?>
                                </div>
                                
                              </td>
                              <td>
                                  <?php if ($value['Status'] == 1): ?>
                                    <i class="material-icons">done</i>
                                  <?php else: ?>
                                    <i class="material-icons">lock</i>
                                  <?php endif ?>
                              </td>
                              <td class="btnAll td-actions text-right">
                                <a data-href="<?= $value['UserID'] ?>" rel="tooltip" onclick="demo.showNotificationSuccess('bottom','right')" class="btnSave d-none"><button class="btn btn-success "><i class="material-icons">save</i></button></a>
                                <a href="<?= base_url() ?>AccountDetail/<?= $value['UserID'] ?>" rel="tooltip" class="btnMore btn btn-info"><i class="material-icons">more_horiz</i></a>
                                <button rel="tooltip" class="btnEdit btn btn-success"><i class="material-icons">edit</i></button>
                                <a data-href="<?= $value['UserID'] ?>" class="btnDel" rel="tooltip"><button class="btn btn-danger"><i class="material-icons">close</i></button></a>
                              </td>
                            </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                    </div><!-- end content-->
                    </div><!--  end card  -->

                    </div> <!-- end col-md-12 -->
                    </div> <!-- end row -->

                  </div>
                </div>
                <?php require('widget_admin/footer.php') ?>
                
              </div>
            </div>
            
            
            
          </body>
         <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
            <script>
              $('body').on('click', '.btnEdit', function(event) {
                $(this).parent().parent().children().children('.show').addClass('d-none');
                $(this).parent().parent().children().children('.input').removeClass('d-none');

                $(this).parent().parent().children('.btnAll').children('.btnMore,.btnEdit,.btnClose').addClass('d-none');
                $(this).parent().parent().children('.btnAll').children('.btnSave').removeClass('d-none');
                /* Act on the event */
              });
            </script>
            <script>
              $('body').on('click', '.btnSave', function(event) {
                $(this).parent().children('.btnMore,.btnEdit,.btnClose').removeClass('d-none');
                $(this).parent().children('.btnSave').addClass('d-none');

                $(this).parent().parent().children().children('.show').removeClass('d-none');
                $(this).parent().parent().children().children('.input').addClass('d-none');

                firstNameEdit = $(this).parent().parent().children('.FirstName').children('.input').children('.inputFirstName').val();
                lastNameEdit = $(this).parent().parent().children('.LastName').children('.input').children('.inputLastName').val();
                emailEdit = $(this).parent().parent().children('.Email').children('.input').children('.inputEmail').val();

                console.log(firstNameEdit);
                console.log(lastNameEdit);
                console.log(emailEdit);
                /* Act on the event */

                $(this).parent().parent().children('.FirstName').children('.show').html(firstNameEdit);
                $(this).parent().parent().children('.LastName').children('.show').html(lastNameEdit);
                $(this).parent().parent().children('.Email').children('.show').html(emailEdit);


                UserID = $(this).data('href');



                $.ajax({
                  url: '<?= base_url() ?>Accounts/editAccount/'+UserID,
                  type: 'POST',
                  dataType: 'json',
                  data: {
                    firstName: firstNameEdit,
                    lastName: lastNameEdit,
                    email: emailEdit
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
                
              });
            </script>

            <script>
              $('body').on('click', '.btnSave', function(event) {
                $(this).parent().children('.btnMore,.btnEdit,.btnClose').removeClass('d-none');
                $(this).parent().children('.btnSave').addClass('d-none');

                $(this).parent().parent().children().children('.show').removeClass('d-none');
                $(this).parent().parent().children().children('.input').addClass('d-none');

                firstNameEdit = $(this).parent().parent().children('.FirstName').children('.input').children('.inputFirstName').val();
                lastNameEdit = $(this).parent().parent().children('.LastName').children('.input').children('.inputLastName').val();
                emailEdit = $(this).parent().parent().children('.Email').children('.input').children('.inputEmail').val();

                console.log(firstNameEdit);
                console.log(lastNameEdit);
                console.log(emailEdit);
                /* Act on the event */

                $(this).parent().parent().children('.FirstName').children('.show').html(firstNameEdit);
                $(this).parent().parent().children('.LastName').children('.show').html(lastNameEdit);
                $(this).parent().parent().children('.Email').children('.show').html(emailEdit);


                UserID = $(this).data('href');



                $.ajax({
                  url: '<?= base_url() ?>Accounts/editAccount/'+UserID,
                  type: 'POST',
                  dataType: 'json',
                  data: {
                    firstName: firstNameEdit,
                    lastName: lastNameEdit,
                    email: emailEdit
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
                
              });
            </script>

             <script>
              $('body').on('click', '.btnDel', function(event) {

                UserID = $(this).data('href');

                object = $(this).parent().parent();

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
                      url: '<?= base_url() ?>Accounts/delAccount/'+UserID,
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
                }).catch(swal.noop)
                
              });
            </script>
          <!--   Core JS Files   -->
          <?php require('widget_admin/bottom.php') ?>
       
  <script type="text/javascript">

    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [5,10, 25, 50, -1],
                [5,10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }
        });
        // $('.card .material-datatables label').addClass('form-group');
    });

    

  </script>
 
</html>