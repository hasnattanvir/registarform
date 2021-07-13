<?php

    $username = "root";
    $password = "";
    $server = 'localhost';
    $db = 'registerform';

    $con = mysqli_connect($server,$username,$password,$db);
    
    if($con){
        // echo"connection sucessful";
        ?>
        <script>
            alert('connection Successful');
        </script>
        
<?php
    }else{
        // echo"connection error";
        die("no connection".mysqli_connect_error());

    }



  ?>