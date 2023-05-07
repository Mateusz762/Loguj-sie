<?php

 $conn = mysqli_connect("localhsot", "root", "", "login");

    $sql = "SELECT * FROM `users` WHERE 'login'";

   $res mysqli_query($conn, $sql);

   while($row = mysqli_fetch_assoc($res)){
    print_r($row);
   }
?>