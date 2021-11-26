<?php
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name ="signup";
  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
  if($conn)
  {
      ?>
        <script>
            alert("Connected Successfully");
        </script>
        <?php
        
  }
  else{
      ?>
      <script>
            alert("No Connection");
        </script>
        <?php
  }
?>