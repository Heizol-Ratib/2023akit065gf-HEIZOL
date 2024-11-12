
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
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
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
            <h2 style="font-family: 'Courier New', Courier, monospace;">Login</h2>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary" name="login_user"><a href="HIS System.php">Login</a></button>
            </form>
        </div>
        <div class="card-footer">
            <p>Don't have an account? <a href="Register.php">Sign up</a></p>
        </div>
    </div>
</div>

</body>
</html>