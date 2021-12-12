<?php
    function inputfields($placeholder, $name, $value, $type){
        $ele = "
        <input class=\"form-control my-4\" type='$type' name='$name' value='$value' placeholder='$placeholder'>
        ";
        echo $ele;
    }
?>