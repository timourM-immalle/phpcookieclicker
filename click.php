<?php
session_start();

if(isset($_SESSION['timesClicked'])) {
    $_SESSION['timesClicked']++;
} else {
    $_SESSION['timesClicked'] = 1;
}

header("location: http://localhost/cookieclicker");
?>