
	<link href = "<?=base_url('assets/signin/signin.css')?>" rel="stylesheet">
	<script src="<?=base_url('assets/jquery-2.1.4.min.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/signin/signin.js')?>" type="text/javascript"></script>
	<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<center>
								<p class="active">Student Register</p>
								</center>
							</div>
						</div>
						<hr>
					</div>
					<?php echo '<span style="font-size:10px; color:red; text-align:center">'.validation_errors().'</span>'; ?>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" action="<?=site_url('student/validate_register');?>" method="post" role="form">
									<div class="form-group">
										<input type="text" name="college_id" tabindex="1" class="form-control" placeholder="College Id" value="<?=set_value('college_id');?>" required autofocus>
									</div>
									<div class="form-group">
										<input type="text" name="reg_no" tabindex="2" class="form-control" placeholder="Registration Id" value="<?=set_value('reg_no');?>" required>
									</div>
									<div class="form-group">
										<input type="password" name="pass" tabindex="3" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<input type="password" name="confpass" tabindex="4" class="form-control" placeholder="Confirm Password" required>
										<br/>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="5" class="form-control btn btn-register" value="Register Now">
												<br/><br/>
												<center>
												Already Registered ? <a href="<?=site_url('student/signin');?>" tabindex="6">Login Here</a>
												</center>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>