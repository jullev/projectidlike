<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("admin/_partials/head.php") ?>

<body>
	<style>
		body {
			background-image: url('<?php echo base_url('assets/assets/img/bg-masthead.jpg') ?>');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
		}
	</style>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header bg-transparent mb-0">
						<h5 class="text-center">Okawari <span class="font-weight-bold text-primary">ADMIN</span></h5>
					</div>
					<div class="card-body">
						<form action="">
							<div class="form-group">
								<input type="text" name="" class="form-control" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="text" name="" class="form-control" placeholder="Password">
							</div>
							<div class="form-group custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me</label>
							</div>
							<div class="form-group">
								<small><a class="text-center" href="#">Lupa Password</a></small>
							</div>
							<div class="form-group">
								<input type="submit" name="" value="Login" class="btn btn-primary btn-block">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>


</html>