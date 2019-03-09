<?php
session_start();
if (!isset($_SESSION["user"]))
{
    header('location:index.php');
}




$con = mysqli_connect('localhost','root');
if($con)
{
 
}
else{
    echo "No Connection";
}
mysqli_select_db($con,'tododb');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <title>Todos</title>
    

</head>

<body class="b" >
<?php
    $pdo = new PDO("mysql:host=localhost;dbname=tododb","root","");

    if(isset($_POST['submit']) )
    {
        $name = $_POST['name'];
        $item = $pdo->prepare("INSERT INTO todos (name) VALUES (:name)");
        $item->bindValue(':name', $name, PDO::PARAM_STR);
        $item->execute();
    }
    elseif(isset($_POST['delete']))
    {
        $id = $_POST['id'];
        $item = $pdo->prepare("delete from todos where id = :id");
        $item->bindValue(':id', $id, PDO::PARAM_INT);
        $item->execute();
    }
?>  
   <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
   <div>
       <div class="row">
           <div class="col sm6 text-center r">
           <a class="navbar-brand" href="home.php">Welcome <?php echo $_SESSION['user']; ?></a>
           </div>
           <div class="col sm6"> 
           <a href="logout.php" class="btn btn-danger ri">Logout</a>
           
           </div>
       </div>
   </div>
  
  
</nav>
   
    <div class=" container text-center">
     <div class="login-box">
    <div class="row">
       
        <div class="col-md-6 login-left">
            
            <h1>Add Todos Here</h1> <br><br>
    <form method="post" action="">
        <input type="text" name="name" value=""> <br> <br>
        <input type="submit" name="submit" value="Add" class="btn btn-primary">
    </form>
    </div>
    <br>

    
     <div class="col-md-6 login-right">
        
         <table>
             <h3>Things To Do</h3>



          <tbody>
               <?php
            $item = $pdo->prepare("SELECT * FROM todos ORDER BY id DESC");
            $item->execute();
    
            foreach($item as $row) {
            ?>
            <tr>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td>
                    <form method="POST">
                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        
                    </form>
                </td>
            </tr>
            <?php
                  }
            ?>
              
          </tbody>
          
    
    </table>
    </div>
        
    </div>
    
        </div>
                </div>

 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>  
</body>
</html>
