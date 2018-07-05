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
              <div class="col-lg-6 col-md-12">
                <div class="card">
                  <div class="card-header card-header-text card-header-rose">
                    <div class="card-text">
                      <h4 class="card-title">Add Categories</h4>
                      <p class="card-category">New categories for tutorials, 2018</p>
                    </div>
                  </div>
                  <div class="card-body table-responsive">
                    <div class="card ">
                      <div class="card-body ">
                        <form id="addCategorie">
                          <div class="form-group bmd-form-group">
                            <label class="text">Categorie Name</label>
                            <input type="text" id="categorieName" class="form-control" name="categorieName">
                          </div>
                        </form>
                      </div>
                      <div class="card-footer ">
                        <a href="<?= base_url() ?>Tutorials/addTutorial" class="btn btn-fill btn-info"><span class="material-icons">arrow_back_ios</span> Back AddNEW Tutorials</a>
                        <button class="btnAdd btn btn-fill btn-info"><span class="material-icons">playlist_add</span> AddNew</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="card">
                  <div class="card-header card-header-tabs card-header-rose">
                    <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title">List Categories:</span>
                        <ul class="nav nav-tabs" data-tabs="tabs">
                          <li class="nav-item">
                            <a class="nav-link active" href="#profile" data-toggle="tab">
                              <i class="material-icons">star_rate</i>
                              Top search
                              <div class="ripple-container"></div></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#messages" data-toggle="tab">
                                <i class="material-icons">code</i>
                                Website
                                <div class="ripple-container"></div></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#settings" data-toggle="tab">
                                  <i class="material-icons">cloud</i>
                                  Server
                                  <div class="ripple-container"></div></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="tab-content">
                              <div class="tab-pane active" id="profile">
                                <table class="table">
                                  <tbody class="addcategorie">
                                    <?php foreach ($arrayDataCategories as $value): ?>
                                    <tr>
                                      <td>
                                      </td>
                                      <td>
                                        <div class="show"><?= $value['CategorieName'] ?></div>  
                                        <div class="input d-none">
                                          <input id="categorieNameEdit" class="categorieNameEdit form-control " type="text" name="categorieNameEdit"  value="<?= $value['CategorieName'] ?>">
                                        </div> 
                                      </td>
                                      <td class="td-actions text-right">
                                        <a data-href="<?= $value['CategorieID'] ?>" rel="tooltip" title="Save Changes"  onclick="demo.showNotificationSuccess('bottom','right')" class="btnSave btn btn-success btn-link btn-sm d-none"><i class="material-icons">save</i></a>
                                        <a data-href="<?= $value['CategorieID'] ?>" rel="tooltip" title="Edit Task" class="btnEdit btn btn-primary btn-link btn-sm"><i class="material-icons">edit</i></a>
                                        <a data-href="<?= $value['CategorieID'] ?>" rel="tooltip"  class="btnDel btn btn-danger btn-link btn-sm"><i class="material-icons">close</i></a>
                                      </td>
                                    </tr>
                                     <?php endforeach ?>
                                  </tbody>
                                </table>
                              </div>
                           

                            <div class="tab-pane" id="messages">
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="" checked>
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="tab-pane" id="settings">
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="" checked>
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="" checked>
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </body>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
            <script>
              
              $(function(){
                

                $('body').on('click', '.btnEdit', function(event) {
                  $(this).parent().parent().children().next().children('.show').addClass('d-none');
                  $(this).parent().parent().children().next().children('.input').removeClass('d-none');

                  $(this).parent().children('.btnSave').removeClass('d-none');
                  $(this).parent().children('.btnEdit').addClass('d-none');
                  $(this).parent().children('.btnClose').addClass('d-none');

                  /* Act on the event */
                });

                $('body').on('click', '.btnSave', function(event) {

                  $(this).parent().children('.btnSave').addClass('d-none');
                  $(this).parent().children('.btnEdit').removeClass('d-none');
                  $(this).parent().children('.btnClose').removeClass('d-none');



                  $(this).parent().parent().children().next().children('.show').removeClass('d-none');
                  $(this).parent().parent().children().next().children('.input').addClass('d-none');

                  categorieNameInPut = $(this).parent().parent().children().next().children('.input').children('#categorieNameEdit').val();

                  $(this).parent().parent().children().next().children('.show').html(categorieNameInPut);

                  CategorieID = $(this).data('href');

                  $.ajax({
                    url: '<?= base_url() ?>Tutorials/editCategorie/'+CategorieID,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                      categorieNameEdit: categorieNameInPut
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
                  /* Act on the event */
                });

                $('body').on('click', '.btnDel', function(event) {
                  CategorieID = $(this).data('href');
                  object = $(this).parent().parent();
                  $.ajax({
                    url: '<?= base_url() ?>Tutorials/delCategorie/'+CategorieID,
                    type: 'POST',
                    dataType: 'json'
                  })
                  .done(function() {
                    //console.log("success");
                  })
                  .fail(function() {
                    //console.log("error");
                  })
                  .always(function() {
                    console.log("complete");
                    object.remove();
                  });
                });

                $('.btnAdd').click(function(event) {

                  valueCategorieName = $('#categorieName').val();
                      
                  if (valueCategorieName == '') {
swal({
                title: "Something wrong",
                text: "Categorie name not empty",
                buttonsStyling: false,
                confirmButtonClass: "btn btn-warning",
                type: "error"
            }).catch(swal.noop)
                  }else{
                    $.ajax({
                    url: '<?= base_url() ?>Tutorials/addCategorie',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                      categorieName: $('#categorieName').val()
                    },
                    })
                    .done(function() {
                      //console.log("success");
                    })
                    .fail(function() {
                      //console.log("error");
                    })
                    .always(function(res) {
                      content = '<tr>';
                      content += '<td>';
                      content += '</td>';
                      content += '<td>';
                      content += '<div class="show">'+$('#categorieName').val()+'</div>  ';
                      content += '<div class="input d-none">'
                      content += '<input id="categorieNameEdit" type="text" class="categorieNameEdit form-control" value="'+$('#categorieName').val()+'">';
                      content += '</div>'
                      content += '</td>';
                      content += ' <td class="td-actions text-right">';
                      content += '<a data-href="'+res+'" rel="tooltip" title="Save Changes" onclick="demo.showNotificationSuccess('+"'"+'bottom'+"'"+','+"'"+'right'+"'"+')" class="btnSave btn btn-success btn-link btn-sm d-none"><i class="material-icons">save</i></a>';
                      content += '<a data-href="'+res+'" rel="tooltip" title="Edit Task" class="btnEdit btn btn-primary btn-link btn-sm"><i class="material-icons">edit</i></a>';
                      content += '<a data-href="'+res+'" rel="tooltip" title="Remove" class="btnDel btn btn-danger btn-link btn-sm"><i class="material-icons">close</i></a>';
                      content += '</td>';
                      content += '</tr>';
                      $('.addcategorie').append(content);

                    });

                    swal({
                        title: "Good job!",
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-success",
                        type: "success"
                    }).catch(swal.noop)
                  }
                  
                });
              });
            </script>
            <!--   Core JS Files   -->
            <?php require('widget_admin/bottom.php') ?>
          </html>