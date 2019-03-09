<?php
session_start();
if(isset($_SESSION["user"]))
{
    header('location:home.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mytodo</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="b">
    <div class="container">
       <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2 class="l">Login Here</h2>
                <form action="validation.php" method="post">
                    
                    <div class="form-group">
                        <label class="l">Username</label>
                        <input type="text" name="user" class="form-control" required>
                        
                    </div>
                    <div class="form-group">
                        <label class="l">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        
                    </div>
                    <button type="submit" class="waves-effect waves-light btn btn-primary">Login</button>
                    
                </form>
            </div>
             <div class="col-md-6 login-right">
                <h2>Register Here</h2>
                <form action="registration.php" method="post">
                    
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                        
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                        
                    </div>
                    <button type="submit" class="waves-effect waves-light btn btn-primary">Register</button>
                    
                </form>
            </div>
        </div>
    </div>
    </div>
    
    
    
    
    
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>