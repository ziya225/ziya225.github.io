<?php
session_start();
if (!isset($_SESSION["username"]) && !empty($_SESSION["username"]))
{
    header('location:login.php');
}

?>


<!DOCTYPE html>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    
            

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Materialize Sandbox</title>
    </head>
<body class=" yellow">
   <div class="container">
       
        <nav class="nav-extended">
    <div class="nav-wrapper">
     <div class="container">
         <a href="logout.php" class="right">Log Out Here</a>  
     </div>
       
     
      
      
    </div>
    <div class="container">
       <div class="nav-content">
      <span class="nav-title"><?php echo $_SESSION['username']; ?></span>
      <a class="btn-floating btn-large halfway-fab waves-effect waves-light teal">
        <i class="material-icons">add</i>
      </a>
    </div> 
    </div>
    
  </nav>
   
       
   </div>
     
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script>   
         $(document).ready(function(){
             $('.carousel').carousel();
         });
      </script> 
</body>
</html>