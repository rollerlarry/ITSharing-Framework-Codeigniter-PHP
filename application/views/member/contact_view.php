<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <?php require('widget_member/top.php') ?>
</head>
<body class="blog-posts ">
   
 
    <?php if ($this->session->has_userdata('UserID')): ?>
	    <?php require('widget_member/navin.php') ?>   
	<?php else: ?>
	    <?php require('widget_member/navout.php') ?>
	<?php endif ?>
    
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url(<?= base_url() ?>/assets/img/bg10.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">A Place for Developer to Share and Discover New Stories</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="contact-content">
            <div class="container">
                <br><br><br>
                <h2 class="title">Send us a message</h2>
                <div class="row">
                    <div class="col-md-7">
                        <p class="description">You can contact us with anything related to our Products. We&apos;ll get in touch with you as soon as possible.
                            <br>
                            <br>
                        </p>
                        <form role="form" id="contact-form" method="post">
                            <div class="form-group">
                                <label for="name" class="bmd-label-floating">Your name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmails" class="bmd-label-floating">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmails">
                                <span class="bmd-help">We'll never share your email with anyone else.</span>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="bmd-label-floating">Phone</label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                            <div class="form-group label-floating">
                                <label class="form-control-label bmd-label-floating" for="message"> Your message</label>
                                <textarea class="form-control" rows="6" id="message"></textarea>
                            </div>
                            <div class="submit text-center">
                                <input type="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">pin_drop</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Find us at the office</h4>
                                <p> Bld Mihail Kogalniceanu, nr. 8,
                                    <br> 7652 Bucharest,
                                    <br> Romania
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">phone</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Give us a ring</h4>
                                <p> Michael Jordan
                                    <br> +40 762 321 762
                                    <br> Mon - Fri, 8:00-22:00
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
    <!-- Model -->
    <?php require('widget_member/login.php') ?>
    <?php require('widget_member/register.php') ?>
    </div>
    <?php require('widget_member/footer.php') ?>
    <?php require('widget_member/bottom.php') ?>
</body>
</html>
