<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?= base_url() ?>assets/js/core/jquery.min.js"></script>
<div class="subscribe-line">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="title">Get Courses &amp; Documentation every Week!</h3>
                <p class="description">
                    Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                </p>
            </div>
            <div class="col-md-6">
                <div class="card card-plain card-form-horizontal">
                    <div class="card-body">
                        <form method="POST" action="#">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">mail</i>
                                            </span>
                                        </div>
                                        <input type="text" class="inputEmail form-control" placeholder="Your Email..." required="true">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btnSub btn btn-danger btn-round btn-block">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $('body').on('click', '.btnSub', function(event) {
        var email = $('.inputEmail').val();
        if (email == '') {
            swal("Something's wrong!", "Please enter your email!", "error");
        }else{
            swal("Good job!", "You subscribe success!", "success");
        }
        $('.inputEmail').val('');
    });
</script>