<?php

if(isset($_COOKIE['timesClicked'])) {
    setcookie('timesClicked', ++$_COOKIE['timesClicked'], time() + 5);
} else {
    setcookie('timesClicked', 1, time() + 5);
}

header("location: http://localhost/cookieclicker/");
?>