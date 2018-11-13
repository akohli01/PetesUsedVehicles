<?php
    include('database/login.php');
?>

<div class="container-fluid margin-top-30px">

    <div class="row">
        <div class="col-xl-12">
            <h1 class="text-center">Cars for Sale</h1>
        </div>
    </div>

    <div class="alert alert-info" role="alert">
        Cars in Frankfurt are currently being added. Feel free to check out the cars in Manhattan
    </div>

    <div class="container margin-top-30px">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-frankfurt-tab" data-toggle="pill" href="#pills-frankfurt" role="tab" aria-controls="pills-frankfurt" aria-selected="true">Frankfurt, Germany</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-manhattan-tab" data-toggle="pill" href="#pills-manhattan" role="tab" aria-controls="pills-manhattan" aria-selected="false">Manhattan, New York</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-frankfurt" role="tabpanel" aria-labelledby="pills-frankfurt-tab">
            <div class="row">

                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/frankfurt/coupe_a5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='A5 3.0 TDI quattro 286' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details9" aria-expanded="false" aria-controls="details">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details9">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/frankfurt/coupe_a5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='A5 3.0 TDI quattro 286' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details10" aria-expanded="false" aria-controls="details">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details10">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/frankfurt/coupe_a5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='A5 3.0 TDI quattro 286' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details11" aria-expanded="false" aria-controls="details">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details11">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/frankfurt/coupe_a5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='A5 3.0 TDI quattro 286' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details12" aria-expanded="false" aria-controls="details">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details12">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/frankfurt/coupe_a5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='A5 3.0 TDI quattro 286' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details13" aria-expanded="false" aria-controls="details">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details13">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/frankfurt/coupe_a5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='A5 3.0 TDI quattro 286' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details14" aria-expanded="false" aria-controls="details">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details14">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/frankfurt/coupe_a5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='A5 3.0 TDI quattro 286' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details15" aria-expanded="false" aria-controls="details">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details15">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/frankfurt/coupe_a5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='A5 3.0 TDI quattro 286' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details16" aria-expanded="false" aria-controls="details">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details16">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/frankfurt/coupe_a5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='A5 3.0 TDI quattro 286' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details17" aria-expanded="false" aria-controls="details">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details17">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-manhattan" role="tabpanel" aria-labelledby="pills-manhattan-tab">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/manhattan/accord1.png" alt="Card image cap">
                        <div class="card-body">
                            <?php
                                        $sql = "SELECT * FROM inventory where model ='Accord' ";
                                        $result = $db->query($sql);

                                        if ($result->num_rows > 0) {
                                            $row = $result->fetch_assoc();

                                            $make = $row["make"];
                                            $model = $row["model"];
                                            $year = $row["year"];
                                            $fuel_economy= $row["fuel-economy"];
                                            $engine_type = $row["engine-type"];
                                            $cylinders = $row["cylinders"];
                                            $seating = $row["seating"];
                                            $transmission = $row["transmission"];
                                            $drive_wheel = $row["drive-wheel"];
                                            $fuel_economy = explode("/",$fuel_economy);
                                        }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details" aria-expanded="false" aria-controls="details">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details">
                                <div class="card card-body text-left">
                                    <?php
                                        echo "City Fuel Economy: ". $fuel_economy[0];
                                        echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                        echo "<br>Engine Type: ". $engine_type;
                                        echo "<br>Cylinders: ". $cylinders;
                                        echo "<br>Seats: ". $seating;
                                        echo "<br>Transmission: ". $transmission;
                                        echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/manhattan/altima1.png" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='Altima' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details1" aria-expanded="false" aria-controls="details1">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details1">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/manhattan/civic1.png" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='Civic' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details2" aria-expanded="false" aria-controls="details2">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details2">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/manhattan/escape1.png" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='Escape' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details3" aria-expanded="false" aria-controls="details3">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details3">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/manhattan/highlander1.png" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='Highlander' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details4" aria-expanded="false" aria-controls="details4">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details4">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/manhattan/sportage1.png" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='Sportage' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details5" aria-expanded="false" aria-controls="details5">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details5">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/manhattan/sienna1.png" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='Sienna' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details6" aria-expanded="false" aria-controls="details6">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details6">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/manhattan/tahoe1.png" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='Tahoe' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details7" aria-expanded="false" aria-controls="details7">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details7">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="images/cars/manhattan/yukon1.png" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            $sql = "SELECT * FROM inventory where model ='Yukon' ";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();

                                $make = $row["make"];
                                $model = $row["model"];
                                $year = $row["year"];
                                $fuel_economy= $row["fuel-economy"];
                                $engine_type = $row["engine-type"];
                                $cylinders = $row["cylinders"];
                                $seating = $row["seating"];
                                $transmission = $row["transmission"];
                                $drive_wheel = $row["drive-wheel"];
                                $fuel_economy = explode("/",$fuel_economy);
                            }

                            ?>
                            <h5 class="card-title"><?php echo "$year $make $model" ?></h5>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details8" aria-expanded="false" aria-controls="details8">
                                Click here for more information
                            </button>
                            <br> <br>
                            <div class="collapse" id="details8">
                                <div class="card card-body text-left">
                                    <?php
                                    echo "City Fuel Economy: ". $fuel_economy[0];
                                    echo "<br>Highway Fuel Economy: ". $fuel_economy[1];
                                    echo "<br>Engine Type: ". $engine_type;
                                    echo "<br>Cylinders: ". $cylinders;
                                    echo "<br>Seats: ". $seating;
                                    echo "<br>Transmission: ". $transmission;
                                    echo "<br>Drive Wheel: ". $drive_wheel;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

    <?php
    include('database/close_connection.php');
    ?>


</div>