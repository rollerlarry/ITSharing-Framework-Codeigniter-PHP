   <div class="modal fade" id="signupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-signup" role="document">
            <div class="modal-content">
            	<form id="TypeValidationRegister" class="form" method="POST" action="<?= base_url() ?>Register">
	                <div class="card card-signup card-plain">
	                    <div class="modal-header">
	                        <h3 class="modal-title card-title">Register</h3>
	                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                            <i class="material-icons">clear</i>
	                        </button>
	                    </div>
	                    <div class="modal-body">
	                        <div class="row">
	                            <div class="col-md-5 ml-auto">
	                                <div class="info info-horizontal">
	                                    <div class="icon icon-rose">
	                                        <i class="material-icons">timeline</i>
	                                    </div>
	                                    <div class="description">
	                                        <h4 class="info-title">Marketing</h4>
	                                        <p class="description">
	                                            We've created the marketing campaign of the community. It was a very interesting collaboration between developer.
	                                        </p>
	                                    </div>
	                                </div>
	                                <div class="info info-horizontal">
	                                    <div class="icon icon-primary">
	                                        <i class="material-icons">code</i>
	                                    </div>
	                                    <div class="description">
	                                        <h4 class="info-title">Fully Coded in HTML5</h4>
	                                        <p class="description">
	                                            We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
	                                        </p>
	                                    </div>
	                                </div>
	                                <div class="info info-horizontal">
	                                    <div class="icon icon-info">
	                                        <i class="material-icons">group</i>
	                                    </div>
	                                    <div class="description">
	                                        <h4 class="info-title">Built Your Futures</h4>
	                                        <p class="description">
	                                            You can download everything you need. All free. We hope you happy about this.
	                                        </p>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-md-5 mr-auto">
	                                <div class="social text-center">
	                                    <button class="btn btn-just-icon btn-round btn-twitter">
	                                        <i class="fab fa-twitter"></i>
	                                    </button>
	                                    <button class="btn btn-just-icon btn-round btn-dribbble">
	                                        <i class="fab fa-google"></i>
	                                    </button>
	                                    <button class="btn btn-just-icon btn-round btn-facebook">
	                                        <i class="fab fa-facebook-f"></i>
	                                    </button>
	                                    <h4> or be classical </h4>
	                                </div>
	                                <form class="form" method="" action="#">
	                                    <div class="card-body">
	                                    	<div class="form-group">
	                                            <div class="input-group">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text">
	                                                        <i class="material-icons">perm_identity</i>
	                                                    </span>
	                                                </div>
	                                                <input type="text" name="userName" placeholder="Username..." class="form-control" required="true" />
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="input-group">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text">
	                                                        <i class="material-icons">lock_outline</i>
	                                                    </span>
	                                                </div>
	                                                <input type="password" name="passWord" placeholder="Password..." class="form-control" required="true"/>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="input-group">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text">
	                                                        <i class="material-icons">lock_outline</i>
	                                                    </span>
	                                                </div>
	                                                <input type="password" name="confirmPassword" placeholder="Confirm Password..." class="form-control" required="true"/>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="input-group">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text">
	                                                        <i class="material-icons">mail</i>
	                                                    </span>
	                                                </div>
	                                                <input type="text" name="email" class="form-control" placeholder="Email..." email="true" required="true">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="input-group">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text">
	                                                        <i class="material-icons">face</i>
	                                                    </span>
	                                                </div>
	                                                <input type="text" name="firstName" class="form-control" placeholder="First Name..." required="true">
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="input-group">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text">
	                                                        <i class="material-icons">face</i>
	                                                    </span>
	                                                </div>
	                                                <input type="text" name="lastName" class="form-control" placeholder="Last Name..." required="true">
	                                            </div>
	                                        </div>
	                                        <div class="form-check">
	                                            <label class="form-check-label">
	                                                <input class="form-check-input" type="checkbox" value="" checked>
	                                                <span class="form-check-sign">
	                                                    <span class="check"></span>
	                                                </span>
	                                                I agree to the
	                                                <a href="#something">terms and conditions</a>.
	                                            </label>
	                                        </div>
	                                    </div>
	                                    <br>
	                                    <div class="modal-footer justify-content-center">
	                                        <button type="submit" class="btn btn-danger btn-round btn-lg">Get Started</button>
	                                    </div>
										<br>
	                                    <div class="modal-footer justify-content-center">
	                                    	<?php if ($error = $this->session->flashdata('account_exist')) : ?>
												<p style="color: red"><b>This username already exists. <br>Try again other account.</b></p>
											<?php endif ?>
											<?php if ($error = $this->session->flashdata('error_confirmpassword')) : ?>
												<p style="color: red"><b>Those passwords didn't match. Try again.</b></p>
											<?php endif ?>
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
	                </div>
            	</form>
            </div>
        </div>
    </div>