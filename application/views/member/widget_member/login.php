    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-login" role="document">
            <div class="modal-content">
            	<form id="TypeValidation" class="form" method="POST" action="<?= base_url() ?>Login">
	                <div class="card card-signup card-plain">
	                    <div class="modal-header">
	                        <div class="card-header card-header-info text-center">
	                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
	                            <h4 class="card-title">Log in</h4>
	                            <div class="social-line">
	                                <a href="#pablo" class="btn btn-just-icon btn-link">
	                                    <i class="fab fa-facebook-f"></i>
	                                </a>
	                                <a href="#pablo" class="btn btn-just-icon btn-link">
	                                    <i class="fab fa-twitter"></i>
	                                </a>
	                                <a href="#pablo" class="btn btn-just-icon btn-link">
	                                    <i class="fab fa-google"></i>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="modal-body">
	                       
	                            <p class="description text-center">Or Be Classical</p>
	                            <div class="card-body">
	                                <div class="form-group">
	                                    <div class="input-group">
	                                        <div class="input-group-prepend">
	                                            <span class="input-group-text">
	                                                <i class="material-icons">perm_identity</i>
	                                            </span>
	                                        </div>
	                                        <input type="text" name="userName" class="form-control" placeholder="Username..." required="true">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <div class="input-group">
	                                        <div class="input-group-prepend">
	                                            <span class="input-group-text">
	                                                <i class="material-icons">lock_outline</i>
	                                            </span>
	                                        </div>
	                                        <input type="password" name="passWord" placeholder="Password..." class="form-control" required="true" />
	                                    </div>
	                                </div>
	                            </div>
	                        
	                    </div>
	                    <div class="modal-footer justify-content-center">
	                        <input type="submit" class="btnLogin btn btn-info btn-wd btn-lg btn-round" value="Get Started">
	                    </div>
	                    <br>
	                    <div class="text-center">
	                    	<?php if ($error = $this->session->flashdata('login_error')) : ?>
								<p style="color: red"><b>Wrong username or password. <br> Try again or click Forgot password to reset it.</b></p>
							<?php endif ?>
							<?php if ($error = $this->session->flashdata('account_lock')) : ?>
								<p style="color: red"><b>This account is currently locked. You can request to unlock <a style="color: red" href="<?= base_url() ?>Lock"><b>Here</b></a> or contact the administrator for more details</b>.</p>
							<?php endif ?>
	                    </div>
	                    <div class="text-center">
	                    	<a href=""><p>Forgot Password ?</p></a>
	                    </div>
	                    <br>
	                </div>
                </form>
            </div>
        </div>
    </div>