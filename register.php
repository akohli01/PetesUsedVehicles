<div class="container-fluid margin-top-30px">
    <?php

    if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {
        echo '<script>window.location="http://www.carbuyersguide.online/template_loader.php?p=login_or_register.php"</script>';
    }

    if (isset($_POST['submit'])) {
        include('database/login.php');

        $firstname= $_POST['fname'];
        $lastname= $_POST['lname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        //Check email
        $stmt = $db->prepare("Select Count(*) from members where email = ?");
        $stmt->bind_param("s", $email);

        $stmt->execute();

        $stmt->bind_result($number);

        $stmt->fetch();

        $stmt->close();

        if ($number == 1) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">
                    Sorry, that email already exists. Please register using a different email.
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                        </button>
                   </div>";
        }

        else {
            //Check Username
            $stmt1 = $db->prepare("Select Count(*) from members where username = ?");
            $stmt1->bind_param("s", $username);

            $stmt1->execute();

            $stmt1->bind_result($number1);

            $stmt1->fetch();

            $stmt1->close();

            if ($number1 == 1) {
                echo "<div class=\"alert alert-danger\" role=\"alert\">
                    Sorry, that username already exists. Please register using a different username.
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                        </button>
                   </div>";
            }

            else {

                $stmt2 = $db->prepare("INSERT INTO members (first_name, last_name, email, password, username) VALUES (?, ?, ?, ?, ?)");
                $stmt2->bind_param("sssss", $firstname, $lastname, $email, $password, $username);

                $stmt2->execute();

                $stmt2->close();

                echo "<div class=\"alert alert-success\" role=\"alert\">
                    You are successfully registered. You may now login. Click <a href =\"?p=login.php\">here</a> if you want to login right now!
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                        </button>
                   </div>";

            }
        }
        include('database/close_connection.php');
    }

    ?>


    <div class="row margin-top-60px">
        <div class="col-xl-8 offset-xl-2 bg-success">
            <h1 class="text-center">Register</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 offset-xl-2 bg-success">
            <h3 class="text-center">or <a href="?p=login.php">login here</a> </h3>
        </div>
    </div>

        <div class="row">
            <div class="col-xl-8 offset-xl-2 bg-secondary">
    <form method ="post" action="#">
        <div class="form-group row margin-top-60px">
            <label for="first_name" class="col-xl-1 offset-xl-3 col-form-label">First Name</label>
            <div class="col-xl-2">
                <input type="text" class="form-control" id="first_name" placeholder="First Name" name="fname" required>
            </div>

            <label for="last_name" class="col-xl-1 col-form-label">Last Name</label>
            <div class="col-xl-2">
                <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="lname" required>
            </div>
        </div>

        <div class="form-group row margin-top-60px">
            <label for="username" class="col-xl-1 offset-xl-4 col-form-label">Username</label>
            <div class="col-xl-3">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="email" class="col-xl-1 offset-xl-4 col-form-label">Email</label>
            <div class="col-xl-3">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-xl-1 offset-xl-4 col-form-label">Password</label>
            <div class="col-xl-3">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-xl-1 offset-xl-4 col-form-label">Confirm password</label>
            <div class="col-xl-3">
                <input type="password" class="form-control" id="password-confirm" placeholder="Confirm password" name="password-confirm" onkeyup="checkPass();" required>
                <span id="confirmMessage" class="confirmMessage"></span>
            </div>
        </div>



        <div class="form-group row margin-top-60px">
            <div class="col-sm-10 offset-xl-7">
                <button type="reset" value="Reset" class="btn btn-primary">Reset</button>
                <button type="submit" class="btn btn-primary" name="submit" id="submit-button">Register</button>
            </div>
        </div>
    </form>
            </div>
        </div>


    <script>
        function checkPass()
        {
            //Store the password field objects into variables ...
            var pass1 = document.getElementById('password');
            var pass2 = document.getElementById('password-confirm');
            //Store the Confimation Message Object ...
            var message = document.getElementById('confirmMessage');
            //Set the colors we will be using ...
            var goodColor = "#29bc20";
            var badColor = "#ff6666";
            //Compare the values in the password field
            //and the confirmation field
                if (pass1.value == pass2.value) {
                    //The passwords match.
                    //Set the color to the good color and inform
                    //the user that they have entered the correct password
                    pass2.style.backgroundColor = goodColor;
                    message.style.color = goodColor;
                    message.innerHTML = "Passwords Match!"
                    document.getElementById("submit-button").disabled = false;
                } else {
                    //The passwords do not match.
                    //Set the color to the bad color and
                    //notify the user.
                    pass2.style.backgroundColor = badColor;
                    message.style.color = badColor;
                    message.innerHTML = "Passwords Do Not Match!"
                    document.getElementById("submit-button").disabled = true;
                }
            }

    </script>

</div>