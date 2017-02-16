<?php
session_start();
?>

<p>The cookie was clicked <?php echo $_SESSION['timesClicked']; ?> times.</p>

<form action="click.php">
    <input type="submit" value="Click the cookie!"/>
</form>