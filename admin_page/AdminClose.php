<?php
session_start();
if($_SESSION['admin_power']!=1){
    echo '<script>alert("You are not a Manager")
    window.close();
    </script>';
} 
?>