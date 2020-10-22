<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title> 
		ENSE374 Login Page
		</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
			integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>

	<body>
	
	
	<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Log In
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
				<form action="">
					<h2>Log In</h2>
					<div class="form-group">
						<label for="InputEmail1">Email address</label>
						<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="form-group">
						<label for="InputPassword1">Password</label>
						<input type="password" class="form-control" id="InputPassword1">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
		</div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Sign Up
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
					<form action="">
						<h2>Sign Up</h2>
						<div class="form-group">
							<label for="InputEmail2">Email address</label>
							<input type="email" class="form-control" id="InputEmail2" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="InputPassword2">Password</label>
							<input type="password" class="form-control" id="InputPassword2">
						</div>
						<div class="form-group">
							<label for="ConfirmPassword2">Confirm Password</label>
							<input type="password" class="form-control" id="ConfirmPassword2">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
		</div>
    </div>
  </div>
  </div>
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
				crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
				crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
			integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" 
				crossorigin="anonymous"></script>
	</body>
	
</html>