<?php

 function check_login($con)

 {
     if(isset($_SESSION['user id']))

     {
        $id= $_SESSION['user_id']; 
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows ($result) > 0)

        {
            $user_data = mysqli_fetch_assoc(result);
            //what do they mean they will return user data.
            return $user_data;
        }
     }
     //redirect to login 
     header("Location:login.php");
     die; 
 }
 