<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<style>
		body {
			background-image: url('<?= base_url('assets/images/capture-page/capture-page-background.png'); ?>');
			background-size: cover;
		}
	</style>
	<title>Project Manna</title>
</head>

<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="text-center" data-aos="fade-down" data-aos-offset="400" data-aos-duration="1000">
					<a href="" class=""><img src="" alt="" class="img-fluid mx-auto d-block my-3"></a>
					<h1 class="my-5">Project Manna</h1>
				</div>
				<div class="card border-0 rounded-0 bg-primary" data-aos="fade-left" data-aos-offset="400" data-aos-duration="1000">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-md-9 p-4">
								<p class="text-light">Create your account</p>
								<?php if ($this->session->flashdata('email-used')) : ?>
									<?= '<p class="alert alert-danger">' . $this->session->flashdata('email-used') . '</p>'; ?>
								<?php endif; ?>
								<form method="POST" action="<?= base_url('tour/send'); ?>">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-envelope"></i></span>
										</div>
										<input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email" autofocus placeholder="Email Address">
									</div>
									<div class="row">
										<div class="col-6">
											<button type="submit" class="btn btn-light px-2">
												Join now
											</button>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-3 bg-light">
								<div class="py-4">
									<!-- <h5 class="text-primary pt-3">Already have an account?</h5>
									<a href="" class="btn btn-outline-primary">Log In</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>
