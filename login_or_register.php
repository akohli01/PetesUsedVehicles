<div class="container-fluid margin-top-30px">

    <?php if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])):  ?>
        <br /> You are logged in!. Do you want to
        <a href="?p=logout.php">Logout?</a>
    <?php else: ?>

        <div class="row">
            <div class="col-xl-12">
                <h1 class="text-center">CRUD (Create/Read/Update/Delete) Assignment</h1>
            </div>
        </div>

        <div class="row margin-top-30px text-center">
            <div class="col-xl-6">
                <h3>Please Login if you already have an existing account</h3>
                <h3><a href="?p=login.php">Login</a></h3>
            </div>
            <div class="col-xl-6">
                <h3>Please Register if you do not have an existing account</h3>
                <h3><a href="?p=register.php">Register</a></h3>
            </div>
        </div>

    <?php endif; ?>
</div>