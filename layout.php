<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <form>
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


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <?php

    $username = "root";
    $password = "";
    $server = 'localhost';
    $db = 'registerform';

    $con = mysqli_connect($server,$username,$password,$db);
    if($con){
        echo"connection sucessful";
    }else{
        echo"connection error";

    }



  ?>




        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>