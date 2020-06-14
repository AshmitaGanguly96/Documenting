<html>
<head>
		<title> User Login and Registration </title>
		<link rel="stylesheet" type="text/css" href="Style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-left" >
			
			<form action="Validation.php", action="home.php" method="post">
			<div class="form-group">
					<label>User Name</label>
					<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
			</div>
			<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" required>
			</div>
			
			<button type="submit" class="btn btn-primary"> Login </button>
			</form>
		</div>
		
			<div class="col-md-6 login-right" >
			<h2> Register </h2>
			<form action="Registration.php" method="post">
			<div class="form-group">
					<label>UserName</label>
					<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
			</div>
			<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary"> Register </button>
			</form>
		</div>
		</div>
	</div>


	</div>
</body>
</html>