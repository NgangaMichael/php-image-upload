<?php
    $con = mysqli_connect('localhost', 'root', '', 'imageupload');
    if(!$con) {
        echo 'Not connected to DB';
    }
?>