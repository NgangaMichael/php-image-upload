<?php
    require_once('./operations.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Upload App</title>
  </head>
  <body>

    <section>
        <h1 class="text-center mt-5">Registration Form</h1>
        <div class="container d-flex justify-content-center">
            <form class="form-group w-50" action="display.php" method="post" enctype="multipart/form-data">
                <?php inputfields('Username', 'username', '', 'text'); ?>
                <?php inputfields('Mobile', 'mobile', '', 'text'); ?>
                <?php inputfields('', 'file', '', 'file'); ?>

                <button class="btn btn-success" name="submit">Submit</button>
            </form>
        </div>
    </section>
    
  </body>
</html>