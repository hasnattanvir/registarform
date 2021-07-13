<?php



?>

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

        
                <?php
                include 'connection.php';

                $ids = $_GET ['id'];

                $showquery = "select * from  registration where id=$ids";
                $showdata = mysqli_query($con,$showquery);
                $arrdata = mysqli_fetch_array($showdata);


                if (isset($_POST['submit'])){
                    $idupdate = $_GET ['id'];
                    $name = $_POST['name'];
                    $mobi = $_POST['mobile'];
                    $ref = $_POST['refer'];
                    $qualifi = $_POST['queli'];
                    $mail = $_POST['email'];
                    $jobprofile = $_POST['posts'];


                    // $insertquery = "insert into registration(name,mobile,degree,email,refer,jobpos) values('$name','$mobi','$qualifi','$mail','$ref','$jobprofile')";
                    $query = "update registration set id=$ids, name='$name',degree='$qualifi', mobile='$mobi', email='$mail',refer='$ref',jobpos='$jobprofile' where id=$idupdate ";
                    $res = mysqli_query($con,$query);

                    if($res){
                        ?>
                        <script>
                            alert("data update properly");
                        </script>

                    <?php
                    }else{
                    ?>
                        <script>
                            alert("data not update inserted ");
                        </script>
                        <?php
                    }

                }
                ?>



            <div class="mb-3">
                <label class="form-label">Enter Your Name: </label>
                <input type="text" class="form-control" name="name" value="<?php echo $arrdata['name']; ?>" >
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Your Mobile:</label>
                <input type="text" class="form-control" name="mobile" value="<?php echo $arrdata['mobile']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Any References:</label>
                <input type="text" class="form-control" name="refer" value="<?php echo $arrdata['refer']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Your Quelification:</label>
                <input type="text" class="form-control" name="queli" value="<?php echo $arrdata['degree']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $arrdata['email']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">web Developer</label>
                <input type="text" class="form-control" name="posts" value="<?php echo $arrdata['jobpos']; ?>">
            </div>


            <button type="submit" name="submit" class="btn btn-primary">update</button>
        </form>
    </div>
    <div class="container mt-3 text-center">
        <a href="display.php" class="btn btn-primary ">Check Form</a>
    </div>




</body>

</html>
