<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container" style="background-color: #3480c1;">
	<div class="row" style="padding-top:80px">
		<div class="col-lg-6 col-md-4 col-lg-push-3 col-md-push-4">
			<div class="panel panel-default" style="margin-top: 50px; margin-bottom: 220px;">
				<div class="panel-heading" style="text-align: center; color: black; background-color: #9ed7ff; font-size: x-large; padding-top: 20px; padding-bottom: 20px;">Register</div>
				<div class="panel-body">
					<?php echo form_open('home/register_process'); ?>

					<div class="form-group" style="padding-top:20px; padding-bottom:15px; padding-left: 15px; padding-right: 15px;">
						<input type="email" name="u_email" class="form-control input-sm" placeholder="Email" style="padding-top: 20px; padding-bottom: 20px;" required>
					</div>

					<div class="form-group" style="padding-bottom:15px; padding-left: 15px; padding-right: 15px;">
						<input type="text" name="u_name" class="form-control input-sm" placeholder="Username" style="padding-top: 20px; padding-bottom: 20px;" required>
					</div>

					<div class="form-group" style="padding-bottom:15px; padding-left: 15px; padding-right: 15px;">
						<input type="password" name="u_pass" class="form-control input-sm" placeholder="Password" style="padding-top: 20px; padding-bottom: 20px;" required>
					</div>

					<div class="form-group" style="padding-left: 15px; padding-right: 15px;">
						<input type="submit" name="u_reg" value="Register" class="btn btn-success btn-sm"style="padding-left: 15px; font-size: large; padding-right:15px;">
						<a href="<?php echo site_url('home'); ?>" class="btn btn-warning btn-sm"style="padding-left: 15px; font-size: large; padding-right:15px;">Login as Admin</a>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>