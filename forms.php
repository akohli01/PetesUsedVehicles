<div class="container-fluid margin-top-30px">

    <div class="row">
        <div class="col-xl-12">
            <h1 class="text-center">Forms</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-6 offset-xl-1 bg-success">
                    <h3>Website Formatting information</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 offset-xl-1 bg-secondary">
            <form method ="post" action="#" name = "form1">
                <div class="form-group row margin-top-30px">
                    <label for="first_name" class="col-xl-3 offset-xl-1 col-form-label">First Name</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="first_name" placeholder="First Name" name="fname" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-xl-3 offset-xl-1 col-form-label">Last Name</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="lname" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-xl-1">
                        <button type="reset" value="Reset" class="btn btn-primary">Reset</button>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </div>
            </form>
                </div>
            </div>


            <div class="row margin-top-30px">
                <div class="col-xl-6 offset-xl-1 bg-success">
                    <h3>Contact Us (Post Form)</h3>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-6 offset-xl-1 bg-secondary">
            <form method ="post" action="#" name = "form2">
                <div class="form-group row margin-top-30px">
                    <label for="first_name_1" class="col-xl-3 offset-xl-1 col-form-label">First Name</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="first_name_1" placeholder="First Name" name="fname" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name_1" class="col-xl-3 offset-xl-1 col-form-label">Last Name</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="last_name_1" placeholder="Last Name" name="lname" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-xl-3 offset-xl-1 col-form-label">Email</label>
                    <div class="col-xl-5">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="feedback" class="col-xl-3 offset-xl-1 col-form-label">Feedback</label>
                    <div class="col-xl-5">
                        <textarea class="form-control" id="feedback" rows="3" name="feedback" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-xl-1">
                        <button type="reset" value="Reset" class="btn btn-primary">Reset</button>
                        <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
                    </div>
                </div>
            </form>
                </div>
            </div>



            <div class="row margin-top-30px">
                <div class="col-xl-6 offset-xl-1 bg-success">
                    <h3>Car Mad Libs (Get Form)</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 offset-xl-1 bg-secondary">
            <form method ="get" action="#" name = "form2">
                <input type="hidden" name="p" value="forms.php" />
                <div class="form-group row margin-top-30px">
                    <label for="name" class="col-xl-3 offset-xl-1 col-form-label">Name</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="1" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="location" class="col-xl-3 offset-xl-1 col-form-label">Location</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="location" placeholder="Location" name="2" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adjective" class="col-xl-3 offset-xl-1 col-form-label">Adjective</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="adjective" placeholder="Adjective" name="3" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="number" class="col-xl-3 offset-xl-1 col-form-label">Number</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="number" placeholder="Number" name="4" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adjective1" class="col-xl-3 offset-xl-1 col-form-label">Adjective</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="adjective1" placeholder="Adjective" name="5" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="verb" class="col-xl-3 offset-xl-1 col-form-label">Verb</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="verb" placeholder="Verb" name="6" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="noun-plural" class="col-xl-3 offset-xl-1 col-form-label">Noun (Plural)</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="noun-plural" placeholder="Plural Noun" name="7" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="location1" class="col-xl-3 offset-xl-1 col-form-label">Location</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="location1" placeholder="Location" name="8" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="noun-plural-1" class="col-xl-3 offset-xl-1 col-form-label">Noun (Plural)</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="noun-plural-1" placeholder="Plural Noun" name="9" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="location2" class="col-xl-3 offset-xl-1 col-form-label">Location</label>
                    <div class="col-xl-5">
                        <input type="text" class="form-control" id="location2" placeholder="Location" name="10" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-xl-1">
                        <button type="reset" value="Reset" class="btn btn-primary">Reset</button>
                        <button type="submit" class="btn btn-primary" name="submit2">Submit</button>
                    </div>
                </div>
            </form>
                </div>
            </div>

        </div>
        <div class="col-xl-6 align-self-center">
            <div class="bg-light">
            <?php

            if(isset($_POST['submit'])){

                function results($fName, $lName, $fileInfo){
                    echo "<b>$fName $lName has requested to view website formatting information</b> <br><br> ". "<pre>$fileInfo</pre>";
                }

                $fName = $_POST['fname'];
                $lName = $_POST['lname'];
                $myFile = fopen("brand_info.txt", "r") or die("Unable to open file!");
                $fileInfo = fread($myFile, filesize("brand_info.txt"));
                fclose($myFile);


                results($fName, $lName, $fileInfo);
            }

            else if(isset($_POST['submit1'])){


                function results($fName, $lName, $email, $feedback){
                    echo "<b>Here is the information we received...</b> <br><br>".
                        "<b>First Name:</b> $fName <br>".
                        "<b>Last Name:</b> $lName <br>".
                        "<b>Email:</b> $email <br><br>".
                        "<b>Feedback:</b> <br>$feedback";
                }

                $fName = $_POST['fname'];
                $lName = $_POST['lname'];
                $email = $_POST['email'];
                $feedback = $_POST['feedback'];

                results($fName, $lName, $email, $feedback);

            }

            else if(isset($_REQUEST['submit2'])){


                function results($one, $two, $three,$four,$five, $six,$seven,$eight,$nine,$ten){
                    echo "<b>The Story of $one</b> <br><br>
                           There was once was a man named $one who lived in $two. One day, he had the idea to create his own $three car
                           dealership. After $four days, he found a/an $five warehouse that could serve as a dealership. He decided to
                            $six it to a car lot. Slowly he acquired more $seven and became more successful. He later bought another 
                            car lot in $eight. After a while, he became obsessed with $nine that wanted all the $nine in the world. Alas,
                             he was unable to obtain all the $nine so he flew away to the planet $ten
                            and lived there for the rest of his life.";
                }

                $one= $_GET['1'];
                $two = $_GET['2'];
                $three = $_GET['3'];
                $four = $_GET['4'];
                $five = $_GET['5'];
                $six = $_GET['6'];
                $seven = $_GET['7'];
                $eight = $_GET['8'];
                $nine = $_GET['9'];
                $ten = $_GET['10'];

                results($one, $two, $three,$four,$five, $six,$seven,$eight,$nine,$ten);

            }
            ?>
            </div>
        </div>
    </div>




</div>