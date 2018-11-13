<?php

session_start();

session_unset();

session_destroy();

if(!isset($_SESSION['firstname']) && !isset($_SESSION['lastname'])) {
    echo '<script>window.location="http://www.carbuyersguide.online/template_loader.php?p=login_or_register.php"</script>';
}

?>