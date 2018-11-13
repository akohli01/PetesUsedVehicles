<div class="container-fluid margin-top-30px">

    <?php


    if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {

        echo '<script>window.location="http://www.carbuyersguide.online/template_loader.php?p=login_or_register.php"</script>';
    }

    if (isset($_POST['submit'])) {

        include('database/login.php');

        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $db->prepare("Select first_name, last_name, password from members where username = ?");
        $stmt->bind_param("s", $username);

        $stmt->execute();

        $stmt->bind_result($fname, $lname, $passwordFromDatabase);

        $stmt->fetch();

        if (password_verify($password, $passwordFromDatabase)) {


            $_SESSION["firstname"] = $fname;
            $_SESSION["lastname"] = $lname;
            $_SESSION["username"] =$username;

            if (isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {
                echo '<script>window.location="http://www.carbuyersguide.online/template_loader.php?p=dashboard.php"</script>';
            }

        } else {
            echo "<div class=\"alert alert-danger\" role=\"alert\">
                    Login failed. Please recheck your username and password or register for an account if you haven't already.
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                        </button>
                   </div>";
        }

        include('database/close_connection.php');
    }

    ?>

    <div class="row margin-top-60px">
        <div class="col-xl-8 offset-xl-2 bg-success">
            <h1 class="text-center">Login</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-8 offset-xl-2 bg-success">
            <h3 class="text-center">or <a href="?p=register.php">register here</a> </h3>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-8 offset-xl-2 bg-secondary">
    <form method ="post" action="#">

        <div class="form-group row margin-top-60px">
            <label for="username" class="col-xl-1 offset-xl-4 col-form-label">Username</label>
            <div class="col-xl-3">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="password" class="col-xl-1 offset-xl-4 col-form-label">Password</label>
            <div class="col-xl-3">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>
        </div>


        <div class="form-group row margin-top-60px">
            <div class="col-sm-10 offset-xl-7">
                <button type="reset" value="Reset" class="btn btn-primary">Reset</button>
                <button type="submit" class="btn btn-primary" name="submit" id="submit-button">Login</button>
            </div>
        </div>
    </form>
        </div>
    </div>
</div>