<?php 
    //TODO: Forward errors to 404.html
    if(isset($_SESSION['error_message'])){
        echo $_SESSION['error_message'];
        unset( $_SESSION['error_message']);
     }
?>