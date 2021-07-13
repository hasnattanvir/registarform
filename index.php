<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'links.php' ?>
    <?php include 'css/style.css' ?>
    <title>Form register</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Enter Your Name: </label>
                <input type="text" class="form-control" name="name" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Your Mobile:</label>
                <input type="text" class="form-control" name="mobile" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Any References:</label>
                <input type="text" class="form-control" name="refer" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Your Quelification:</label>
                <input type="text" class="form-control" name="queli" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">web Developer</label>
                <input type="text" class="form-control" name="posts" value="">
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container mt-3 text-center">
        <a href="display.php" class="btn btn-primary ">Check Form</a>
    </div>




</body>

</html>

<?php
include 'connection.php';


if (isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $mobi = $_POST['mobile'];
    $ref = $_POST['refer'];
    $qualifi = $_POST['queli'];
    $mail = $_POST['email'];
    $jobprofile = $_POST['posts'];


    $insertquery = "insert into registration(name,mobile,degree,email,refer,jobpos) values('$name','$mobi','$qualifi','$mail','$ref','$jobprofile')";

    $res = mysqli_query($con,$insertquery);

    if($res){
        ?>
        <script>
            alert("data inserted properly");
        </script>

    <?php
     }else{
    ?>
        <script>
            alert("data not inserted ");
        </script>
        <?php
     }

}
?>
