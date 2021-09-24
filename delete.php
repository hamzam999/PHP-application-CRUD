<?php

include('contact.php');


    $id= $_GET['id'];
    mysqli_query($conn,"DELETE FROM `user_details` WHERE `user_details`.`id` = $id");

?>