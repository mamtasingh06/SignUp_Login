<?php
    if(isset($_REQUEST['submit']))
    {
        $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
        $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
        $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
        $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_REQUEST['cpassword']);

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        // Checking email

        $emailquery = "select * from registration where email = '$email' ";
        $query = mysqli_query($conn, $emailquery);

        $emailcount = mysqli_num_rows($query);
        if($emailcount>0)
        {
            echo "email already exists";
        }
        else{
            if($password === $cpassword)
            {
                $insertquery = "insert into registration(username, email, phone, password, cpassword)
                 values('$name', '$email', '$phone', '$pass', '$cpass')";

                 $iquery = mysqli_query($conn, $insertquery);
                 if($iquery)
                 {
                    ?>
                      <script>
                          alert("Data inserted Successfully");
                      </script>
                      <?php
                      
                }
                else{
                    ?>
                    <script>
                          alert("Unable to insert");
                      </script>
                      <?php
                }
            }
            else{
                echo "password are not matching";
            }
        }
    }
?>