<?php

include 'connection.php';

$id = $_GET['iddel'];
$deletequery = "delete from registration where id=$id";
$query = mysqli_query($con,$deletequery);
if($query){
    ?>
    <script>
        alert("Deleted successfully");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Not Deleted");
    </script>
    <?php
}
header('location:display.php');

?>