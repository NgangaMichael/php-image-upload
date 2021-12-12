<?php
    include('./connect.php');
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $mobile = $_POST['mobile'];
        $image = $_FILES['file'];
        $imagefilename = $image['name'];
        $imagefileerror = $image['error'];
        $imagefiletemp = $image['tmp_name'];
        $filename_separate = explode('.', $imagefilename);
        $file_extension = strtolower(end($filename_separate));

        $extension = array('jpeg', 'jpg', 'png');
        if(in_array($file_extension, $extension)) {
            $upload_image = 'images/'. $imagefilename;
            move_uploaded_file($imagefiletemp, $upload_image);
            $sql = "insert into `registration` (name, mobile, image) values('$username', '$mobile', '$upload_image')";
            $results = mysqli_query($con, $sql);
            if($results) {
                echo '<div class="alert alert-success">Data inserted succesfully</div>';
            } else {
                die(mysqli_error($con));
            }
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Display Data</title>
    <style>
        img {
            width: 100px;
        }
    </style>
  </head>
  <body>
        <h2 class="mt-5 text-center">Dsplaying Data</h2>
        <div class="container d-flex justify-content-center">
            <table class="table table-bordered w-50">
                <thead>
                    <tr>
                        <th scope="col">SL NO</th>
                        <th scope="col">Username</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "select * from `registration`";
                        $results = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_assoc($results)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $image = $row['image'];

                            echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td><img src='.$image.' alt=""></td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
        </div>
  </body>
</html>