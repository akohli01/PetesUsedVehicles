<div class="container-fluid margin-top-30px">

    <div class="row">
        <div class="col-xl-12">
            <h1 class="text-center">Everything Form</h1>
        </div>
    </div>

    <div class="row margin-top-60px">
        <div class="col-xl-5 offset-xl-1 bg-success">
            <h1 class="text-center">Sell Your Car</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-5 bg-secondary offset-xl-1">
            <form method ="post" action="#" name = "sell_your_car">
                <div class="form-group row margin-top-30px">
                    <label for="first_name" class="col-xl-2 offset-xl-1 col-form-label">First Name</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="first_name" placeholder="First Name" name="fname" required>
                    </div>
                    <label for="last_name" class="col-xl-2 offset-xl-1 col-form-label">Last Name</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="lname" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-xl-2 offset-xl-1 col-form-label">Email</label>
                    <div class="col-xl-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    </div>
                    <label for="phone-number" class="col-xl-2 offset-xl-1 col-form-label">Phone Number</label>
                    <div class="col-xl-3">
                        <input type="tel" class="form-control" id="phone-number" placeholder="Phone Number" name="phone-number" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="selling-location" class="col-xl-3 offset-xl-1 col-form-label">Location to sell car</label>
                    <select class="form-control col-xl-3 offset-xl-1" id="selling-location" name="location">
                        <option value="">Select...</option>
                        <option value="Frankfurt">Frankfurt, Germany</option>
                        <option value="Manhattan">Manhattan, United States</option>
                    </select>
                </div>
                <br>
                <div class="form-group row">
                    <label for="make" class="col-xl-2 offset-xl-1 col-form-label">Car Make</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="make" placeholder="Car Make" name="make" required>
                    </div>
                    <label for="model" class="col-xl-2 offset-xl-1 col-form-label">Car Model</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="model" placeholder="Car Model" name="model" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="year" class="col-xl-2 offset-xl-1 col-form-label">Car Year</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="year" placeholder="Car Year" name="year" required>
                    </div>
                    <label for="mileage" class="col-xl-2 offset-xl-1 col-form-label">Mileage</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="mileage" placeholder="Mileage" name="mileage" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="secret" class="col-xl-2 offset-xl-1 col-form-label">Enter a secret about your car</label>
                    <div class="col-xl-3">
                        <input type="password" class="form-control" id="secret" placeholder="Secret" name="secret" required>
                    </div>
                    <label for="price" class="col-xl-2 offset-xl-1 col-form-label">Asking Price</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="price" placeholder="Price" name="price" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="vin" class="col-xl-2 offset-xl-1 col-form-label">Vehicle Identification Number</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="vin" placeholder="Vehicle Id" name="vin" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="color" class="col-xl-3 offset-xl-1 col-form-label">Color</label>
                    <select class="form-control col-xl-3 offset-xl-1" id="color" name="color">
                        <option value="">Select...</option>
                        <option value="white">White</option>
                        <option value="silver">Silver</option>
                        <option value="black">Black</option>
                        <option value="grey">Grey</option>
                        <option value="blue">Blue</option>
                        <option value="red">Red</option>
                        <option value="brown">Brown</option>
                        <option value="green">Green</option>
                        <option value="others">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="col-xl-3 offset-xl-1 col-form-label">Been in Accident before?</label>
                        <br>
                    <div class="form-check form-check-inline col-xl-1 offset-xl-2 ">
                        <input class="form-check-input" type="radio" name="accident" id="inlineRadio1" value="yes">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="accident" id="inlineRadio2" value="no">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 offset-xl-1 col-form-label">Additional Features</label>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="features[]" id="inlineCheckbox1" value="gps">
                        <label class="form-check-label" for="inlineCheckbox1">GPS</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="features[]" id="inlineCheckbox2" value="dvd-player">
                        <label class="form-check-label" for="inlineCheckbox2">DVD Player</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="features[]" id="inlineCheckbox3" value="sunroof">
                        <label class="form-check-label" for="inlineCheckbox3">Sunroof</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="features[]" id="inlineCheckbox4" value="heated-seats">
                        <label class="form-check-label" for="inlineCheckbox4">Heated Seats</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="features[]" id="inlineCheckbox5" value="rearview-camera">
                        <label class="form-check-label" for="inlineCheckbox5">Rearview Camera</label>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10 offset-xl-1">
                        <input type="hidden" name="date" id="todayDate"/>
                        <button type="reset" value="Reset" class="btn btn-primary">Reset</button>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-xl-4 offset-xl-2">
            <div class="display_div" id="results">
                <div class="bg-light text-center">
                <?php

                if (isset($_POST['submit'])) {

                    function results($fName, $lName,$email,$phone_number,$location,$make,$model,$year,$mileage,$vin,$secret,$price,
                                     $color,$accident)
                    {

                        echo "<b>Your Details:</b><br><br><b>First Name: </b>$fName<br> <b>Last Name: </b> $lName<br> <b>Email: </b> $email<br> 
                            <b>Phone Number: </b>$phone_number<br><b>Location: </b> $location<br><br><b>Car Details:</b><br><br>
                            <b>Make: </b>$make<br><b>Model: </b>$model<br> <b>Year: </b>$year<br> <b>Mileage: </b> $mileage<br> 
                             <b>Vehicle Identification Number: </b>$vin<br> <b>Your secret: </b>$secret<br> <b>Asking price:</b>
                             $price<br><b>Color: </b>$color<br><b>Any previous accidents: </b>$accident<br>";
                        if(!empty($_POST['features'])) {
                            echo "<b>Features: </b><br>";
                            // Loop to store and display values of individual checked checkbox.
                            foreach ($_POST['features'] as $selected) {

                                echo $selected . "</br>";
                            }
                        }
                        // fileupload();
                    }

                    /*function fileupload()
                    {
                        echo "<br><br><b>Photo details:</b><br>";
                        $target_dir = "images/uploads/";
                        $target_file = $target_dir . basename($_FILES["car_photo"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                        $check = getimagesize($_FILES["car_photo"]["tmp_name"]);

                        if ($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }

                        if (file_exists($target_file)) {
                            echo "Photo already exists on our server.";
                            $uploadOk = 0;
                        }

                        if ($_FILES["car_photo"]["size"] > 200000) {
                            echo "Sorry, your file is too large.";
                            $uploadOk = 0;
                        }

                        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" &&
                            $imageFileType != "gif"
                        ) {

                            echo "Sorry, only JPG, JPEG, PNG, or GIF files are allowed";
                            $uploadOk = 0;
                        }

                        if ($uploadOk == 0) {
                            echo "Sorry, your file cannot be uploaded. Please review the above errors";
                        }
                        else {
                            if (move_uploaded_file($_FILES["car_photo"]["tmp_name"], $target_file)) {
                                echo "The file " . basename($_FILES["car_photo"]["name"]) . " has been uploaded.";
                                displayPhoto(basename($_FILES["car_photo"]["name"]));
                            } else {
                                echo "Sorry, our server is having problems uploading your file. Please try again later";
                            }
                        }

                    }

                    function displayPhoto($filename){
                        echo "<br>This is the photo we received: <br>";
                        echo "<img src=\"images/uploads/$filename\">";
                    }
                    */



                    $fName = $_POST['fname'];
                    $lName = $_POST['lname'];
                    $email = $_POST['email'];
                    $phone_number = $_POST['phone-number'];
                    $location = $_POST['location'];

                    $make = $_POST['make'];
                    $model = $_POST['model'];
                    $year = $_POST['year'];
                    $mileage = $_POST['mileage'];
                    $vin = $_POST['vin'];
                    $secret = $_POST['secret'];
                    $price = $_POST['price'];
                    $color = $_POST['color'];

                    if (isset($_POST['accident'])){
                        $accident = $_POST['accident'];
                    }

                    results($fName, $lName,$email,$phone_number,$location,$make,$model,$year,$mileage,$vin,$secret,$price,
                        $color,$accident);

                }


                ?>
            </div>
        </div>
    </div>

    </div>
</div>