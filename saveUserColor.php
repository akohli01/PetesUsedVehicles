<?php

        $userColor = $_POST['color'];

        include('database/login.php');

        $username = $_SESSION["username"];

        $stmt = $db->prepare("Update members set color = ? where username = ?");
        $stmt->bind_param("ss", $userColor, $username);

        $stmt->execute();


        $stmt->close();


        include('database/close_connection.php');

?>