<?php
    require_once('../db_connect/config.php');
    if(!empty($_POST)){
        $home = $mysqli -> real_escape_String($_POST['home']);
        $away = $mysqli -> real_escape_String($_POST['away']);
    }
    $query = "INSERT INTO score_data (home, away) VALUES ('$home','$away')";
    $result = mysqli_query($mysqli, $query);
?>