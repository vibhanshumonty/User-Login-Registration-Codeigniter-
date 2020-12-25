<?php
$this->load->view('header');
?>

<?php
$user = $this->session->userdata('user');
extract($user);
?>
<div class="d-flex flex-column justify-content-center" id="login-box">
	<div class="login-box-header">
		<h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">
		<a href="<?php echo base_url(); ?>" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i></a>
        
			Welcome <?php echo $first_name; ?> <?php echo $last_name; ?> 
			<span><a href="<?php echo base_url(); ?>index.php/user/logout" class="btn btn-danger"><i class="fa fa-sign-out" aria-hidden="true"></i>
</a></span>
		</h4>
	</div>
	
	<div class="login-box-content">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 ">
				<center>
					<a href="<?php echo site_url('user/cod') ?>" class="btn btn-success">COD</a>
				</center>

			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<center>
					<a href="<?php echo site_url('user/api') ?>" class="btn btn-info">API</a>
				</center>
			</div>

		</div>


	</div>
	<div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
		<a href="https://github.com/vibhanshumonty" target="_blank">K. Vibhanshu</a>
	</div>
</div>



<?php
$this->load->view('footer');
?>