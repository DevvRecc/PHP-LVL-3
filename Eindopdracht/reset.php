<?php 
    session_start();
    if(session_destroy()){
        header("location: eindopd-recep.php");
    }
?>