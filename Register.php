<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <style>
        body {
            background-color: #8ffaf1;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color:  #023dbd;
            color: rgb(255, 255, 255);
            padding: 20px 0;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
			margin-top:70px;
        }

        .card {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .card-header {
            background-color: #023dbd;
            color: white;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 10px;
			
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            width: 100%;
        }

        .btn-primary:hover {
            background-color:  #28a745;
            border-color:  #28a745;
        }

        .card-footer {
            text-align: center;
            padding: 10px;
        }

        .card-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body background="fff.jpg">

    <div class="header">
        <h1>Health Is Safety (HIS) System</h1>
        <p>Your health, our priority</p>
    </div>

	<div class="container">
    <div class="card">

	<div class="card-header">
            <h2 style="font-family: 'Courier New', Courier, monospace;"> Register</h2>
        </div>
	
		<div class="card-body">

  <form method="post" action="Register.php">
  	<?php include('Errors.php'); ?>
  	<div class="form-group">
  	  <label> <strong>Username</strong></label><br>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="form-group">
	  <strong><label>Email</label></strong><br>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="form-group">
	  <strong><label>Password</label></strong><br>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="form-group"><br>
  	  <label><strong>Confirm password</label></strong><br>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="form-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
	</div>
	  <div class="card-footer">
            <p>Already a member? <a href="logIn.php">Sign in</a></p>
        </div>
  		</form>
	</div>
	</div>
</body>
</html>


