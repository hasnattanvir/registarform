

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php include 'links.php' ?>
    <?php include 'css/style.css' ?>
     <title>Document</title>
 </head>
 <body>
     <div class="container">
     <table class="table table-light text-center">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Degree</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email</th>
                <th scope="col">Refer</th>
                <th scope="col">Post</th>
                <th scope="col"colspan="2">Operation</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'connection.php';

            $selectquery = "select * from registration ";


            $query =  mysqli_query($con,$selectquery);

            $nums = mysqli_num_rows($query);


            while($res = mysqli_fetch_array($query)){
                ?>
                <tr>
                <th scope="row"><?php echo $res['id']; ?></th>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['degree']; ?></td>
                <td><?php echo $res['mobile']; ?></td>
                <td><?php echo $res['email']; ?></td>
                <td><?php echo $res['refer']; ?></td>
                <td><?php echo $res['jobpos']; ?></td>
                <td>
                <a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fas fa-edit"></i></a>
                    </td>
                <td>
                <a href="delete.php?iddel=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"> <i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
           <?php
            
            }

            ?>
           
        </tbody>
        </table>
     </div>

     <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
 </body>
 </html>