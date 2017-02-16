<?php

setcookie('timesClicked', 0, time() - 60);

header("location: http://localhost/cookieclicker/");
?>