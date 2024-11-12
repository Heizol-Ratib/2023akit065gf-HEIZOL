
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: logIn.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: logIn.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIS System - Health Is Safety</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fafaf8;
          
        }
        .header {
            background-color: #023dbd;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .footer {
            background-color:#02a10a;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            width: 100%;
            bottom: 0;
            margin-top:20px;
        }
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body background="fff.jpg">

    <div class="header">
        <h1>Health Is Safety (HIS) System</h1>
        <p>Your health, our priority</p>
    </div>


    <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>



    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2><strong>Report Your Symptoms </strong></h2>
                <form>
                    <div class="form-group">
                        <label for="symptoms"><strong>Describe your signs and symptoms:</strong></label>
                        <textarea class="form-control" id="symptoms" rows="4" placeholder="Enter your symptoms here..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="location"><strong>Your Location:</strong></label>
                        <input type="text" class="form-control" id="location" placeholder="Enter your location">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <h3>Emergency Contact</h3>
                <p>If your condition is serious, please call:</p>
                <div class="alert alert-danger text-center">
                    <strong>Emergency Number: 911</strong>
                    <button type="submit" class="btn btn-primary btn-block"><a href="LogOut.php">LOG OUT</a></button>

                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>