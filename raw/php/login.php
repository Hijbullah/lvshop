<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Login Page</title>
		<link rel="stylesheet" href="css/all.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="login-page">
		<div class="container h-100">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-4">
					<div class="text-center">
						<img class="img-fluid" src="img/login.png" alt="" width="100px" height="100px">
					</div>
					<div class="login-panel ">
							<h1 class="login-title">Sign in</h1>

							<form action="/action_page.php">
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" id="email">
								</div>
								<div class="form-group">
									<label for="pwd">Password</label>
									<input type="password" class="form-control" id="pwd">
								</div>
								<button type="submit" class="btn btn-primary btn-block">Sign in</button>
								<div class="form-group form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox"> Remember me
									</label>
								</div>
								
							</form>

							<p class="line"><span>Are you new ?</span></p>
							<button type="submit" class="btn btn-gray btn-block">Create Your Account</button>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>