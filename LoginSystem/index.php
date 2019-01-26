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
<body class="white-text #f44336 red">

           <div class="container ">
                   
                   
             <div class="col s6">
              <h2>Login Form</h2>
               <form action="validation.php" method="post">
                   <div class="form-group">
                      <label >Username</label>
                       <i class="material-icons left">people</i>
                        <input id="email" type="email" class="validate" name="username">
          
          <span class="helper-text" data-error="Must include @" data-success="right"></span>
                   </div>
                    <div class="form-group">
                      <label >Password</label>
                       <i class="material-icons left">lock</i>
                       <input type="password" name="password" class="form-control">
                   </div>
                  <button class="btn waves-effect waves-light #004d40 teal darken-4" type="submit" name="action">LogIn
    <i class="material-icons right">send</i>
  </button>
                   
                   
               </form>
           </div>
            <div class="col s6">
              <h2>SignUP Form</h2>
               <i class="material-icons left">people</i>
               <form action="regist.php" method="post">
                   <div class="form-group">
                      <label >Username</label>
                       <input id="email" type="email" class="validate" name="username">
          
          <span class="helper-text" data-error="Must include @" data-success="right"></span>
                   </div>
                    <div class="form-group">
                      <label >Password</label>
                       <i class="material-icons left">lock</i>
                       <input type="password" name="password" class="form-control">
                   </div>
                  <button class="btn waves-effect waves-light" type="submit" name="action">SignUp
    <i class="material-icons right">send</i>
  </button>
                   
                   
               </form>
           </div>
                </div>
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