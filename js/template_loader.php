<?php

session_start();

if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])){

    include('database/login.php');

    $username = $_SESSION["username"];

    $stmt = $db->prepare("Select color from members where username = ?");
    $stmt->bind_param("s", $username);

    $stmt->execute();

    $stmt->bind_result($color);

    $stmt->fetch();

    $stmt->close();

    include('database/close_connection.php');

    echo "<script>document.body.style.backgroundColor = $color;</script>";
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/bootstrap-colorpicker.css">

    <!--Custom styles -->
    <link rel="stylesheet" href="css/custom.css">

    <title><?php

        function get_string_between($string, $start, $end){
            $string = ' ' . $string;
            $ini = strpos($string, $start);
            if ($ini == 0) return '';

            elseif(preg_match('/_/', $string)){
                $string = str_replace('_', ' ', $string);
                $ini += strlen($start);
                $len = strpos($string, $end, $ini) - $ini;
                return substr($string, $ini, $len);
            }
            else {
                $ini += strlen($start);
                $len = strpos($string, $end, $ini) - $ini;
                return substr($string, $ini, $len);
            }
        }

        $path = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $basename = basename($path);
        if(strcmp($basename,"template_loader.php") == 0){
            echo "Table of Contents";
        }
        else
            echo ucwords(get_string_between($basename, '=', '.'));
        ?></title>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-colorpicker.js"></script>


</head>
<body>

<?php include("header.php"); ?>

<!--Main section -->
<main>
    <?php


    if(isset($_GET["p"])) {
        $sPage = $_GET["p"];


        if ($sPage == "") {
            $sPage = "toc.php";
        }

        //Needed just for WEB 250 - Link redirection
        else if ($sPage == "employee_database.php") {
            echo '<script>window.location="http://www.carbuyersguide.online/template_loader.php?p=inventory.php"</script>';
            break1;
        }

        //Needed just for WEB 250 - Link redirection
        else if ($sPage == "sell_car_form_formerator.php") {
            echo '<script>window.location="http://www.carbuyersguide.online/template_loader.php?p=formerator_forms.php"</script>';
            break1;
        }

        include("$sPage");
    }

    else{
        include("toc.php");
    }
    ?>

</main>

<?php include("footer.php"); ?>


</body>
</html>