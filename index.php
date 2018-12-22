
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>LogIn</title>
</head>
<body>
	<a href="some_stuff.php">some_stuff</a>	
		

	<div class="container">
		<div class="row">
			<div class="col-4">

			</div>
			<div class="col-4">
				<h1>Log In</h1>
				<form>
					<div class="form-row">
						<div class="form-group">
							<label for="inputAddress">Name / ID</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="Search...">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Password</label>
							<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<div>
								<input class="form-check-input" type="checkbox" id="gridCheck">
								<label class="form-check-label" for="gridCheck">
									Employee
								</label>
							</div>
							<div>
								<input class="form-check-input" type="checkbox" id="gridCheck">
								<label class="form-check-label" for="gridCheck">
									Team Lead
								</label>
							</div>
							<div>
								<input class="form-check-input" type="checkbox" id="gridCheck">
								<label class="form-check-label" for="gridCheck">
									R&R Admin
								</label>
							</div>
						</div>
					</div>
					<a href="employee.php" type="submit" class="btn btn-primary">Log In</a>
				</form>


			</div>
			<div class="col-4">

			</div>

		</div>


	</div>


</body>
</html>