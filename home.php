<?php
   session_start();
   if(!isset($_SESSION['username']))
    {
        ?>
         <script>
             alert("You are logged out!");
         </script>
        <?php
        header('location:login.php');
    }
?>
<?php include('dbconn.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php       
            echo ' <div class="container">';
            echo '<table class = "table">';
            echo "<thead>";
                echo "<tr>";
                    
                    echo "<th>Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Phone</th>";
                    
                    
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                
                    echo "<tr>";
                        
                        echo "<td>" . $_SESSION["username"] . "</td>";
                        echo "<td>" . $_SESSION["email"] . "</td>";
                        echo "<td>" . $_SESSION["phone"] . "</td>";
                       
                        
                       
                         echo "</tr>";
                
            echo "</tbody>";
        echo '</table>';
      
       echo '<div class="text-end">';
       echo '<a href="logout.php">';
       echo '<input class="btn btn-primary text-right" type="submit" name="submit" value = "Logout">';
       echo '</a>';
       echo ' </div> ';
        echo ' </div> ';
       
                
        ?>
        <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
</body>
</html>