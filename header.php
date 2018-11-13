<!-- Header section -->

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <nav class="navbar navbar-expand-lg navbar-dark">

                    <a class="navbar-brand" href="template_loader.php"><img src="images/icon.png" alt="Home Icon"></a>
                    <h3 class="navbar-text text-white">Pete's Used Vehicles</h3>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item">
                                <a class="nav-link text-white " href="?p=home.php">Course Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white " href="?p=introduction.php">Introduction</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link text-white" href="template_loader.php">Table of Contents</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Brand
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="?p=brand.php">Home</a>
                                    <a class="dropdown-item" href="?p=sell_car_form.php">Sell your Car</a>
                                    <a class="dropdown-item" href="?p=employees.php">Employees</a>
                                    <a class="dropdown-item" href="?p=inventory.php">For Sale</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <h3 class="text-white"><i>"Guaranteed a quality vehicle with the lowest prices around!"</i></h3>

                <br>

                <?php if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])):  ?>

                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo "Hi " . ucfirst($_SESSION['firstname']) . " " . ucfirst($_SESSION['lastname']); ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="?p=dashboard.php">Dashboard</a>
                        <a class="dropdown-item" href="?p=logout.php">Logout</a>
                    </div>
                </div>

                <?php else: ?>

                    <button type="button" class="btn btn-primary" onclick=" directLoginOrRegister()" disabled>Login/Register </button>

                <?php endif; ?>

                <br>
                <br>

            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="alert alert-danger" role="alert">
                Login/Register feature is currently not working. Database structure is currently being developed. Thank you
                for your patience!
            </div>

        </div>
    </div>

    <script>
        function directLoginOrRegister()
        {
            location.href = "template_loader.php?p=login_or_register.php";
        }
    </script>
</header>