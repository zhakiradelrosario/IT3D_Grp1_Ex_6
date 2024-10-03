<?php
$location=" http://localhost:8080/Ex6/form.php";
$redirect = false;

if($redirect && !empty($location)){
    header('Location: '.$location);
    exit;
}
?>