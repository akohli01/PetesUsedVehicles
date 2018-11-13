<div class="container-fluid margin-top-30px">

    <div class="row">
        <div class="col-xl-12">
            <h1 class="text-center">FizzBuzzBangEverything! Assignment</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <form method ="post" action="#" name = "form1">
                <div class="form-group row margin-top-30px">
                    <label for="first_name" class="col-xl-2 offset-xl-1 col-form-label">First Name</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="first_name" placeholder="First Name" name="fname" value="John" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-xl-2 offset-xl-1 col-form-label">Last Name</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="lname" value="Doe" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="starting-number" class="col-xl-2 offset-xl-1 col-form-label">Starting Number</label>
                    <div class="col-xl-3">
                        <input type="number" class="form-control" id="starting-number" placeholder="Starting Number" name="starting-number" value="0" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ending-number" class="col-xl-2 offset-xl-1 col-form-label">Ending Number</label>
                    <div class="col-xl-3">
                        <input type="number" class="form-control" id="ending-number" placeholder="Ending Number" name="ending-number" value="100" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="1stword" class="col-xl-2 offset-xl-1 col-form-label">Word to use for fizz (first word)</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="1stword" placeholder="First Word" name="1stword" value="Fizz" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="1stnumber" class="col-xl-2 offset-xl-1 col-form-label">Number to use for the first word</label>
                    <div class="col-xl-3">
                        <input type="number" class="form-control" id="1stnumber" placeholder="First Number" name="1stnumber" value="3" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="2ndword" class="col-xl-2 offset-xl-1 col-form-label">Word to use for buzz (second word)</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="2ndword" placeholder="Second Word" name="2ndword" value="Buzz" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="2ndnumber" class="col-xl-2 offset-xl-1 col-form-label">Number to use for the second word</label>
                    <div class="col-xl-3">
                        <input type="number" class="form-control" id="2ndnumber" placeholder="Second Number" name="2ndnumber" value="5" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="3rdword" class="col-xl-2 offset-xl-1 col-form-label">Word to use for bang (third word)</label>
                    <div class="col-xl-3">
                        <input type="text" class="form-control" id="3rdword" placeholder="Third Word" name="3rdword" value="Bang" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="3rdnumber" class="col-xl-2 offset-xl-1 col-form-label">Number to use for the third word</label>
                    <div class="col-xl-3">
                        <input type="number" class="form-control" id="3rdnumber" placeholder="Third Number" name="3rdnumber" value="10" required>
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

    <div class="row">
        <div class="col-xl-6 offset-xl-3">
            <div class ="bg-light">
                <?php

                if(isset($_POST['submit'])){

                    function calculateFizzBuzz($starting_num, $ending_num, $first_word, $first_number, $second_word,
                                               $second_number, $third_word, $third_number){

                        for ($i = $starting_num; $i <= $ending_num; $i++) {

                            if ($i % $first_number == 0 && $i % $second_number == 0 && $i % $third_number == 0 ){
                                echo $first_word. $second_word. $third_word. "<br>";
                            }

                            else if ($i % $first_number == 0 && $i % $second_number == 0 ){
                                echo $first_word. $second_word. "<br>";
                            }

                            else if ($i % $first_number == 0 && $i % $third_number == 0 ){
                                echo $first_word. $third_word. "<br>";
                            }

                            else if ($i % $second_number == 0 && $i % $third_number == 0 ){
                                echo $second_word. $third_word. "<br>";
                            }

                            else if ($i % $first_number == 0){
                                echo $first_word. "<br>";
                            }

                            else if ($i % $second_number == 0) {
                                echo $second_word. "<br>";
                            }

                            else if ($i % $third_number == 0) {
                                echo $third_word. "<br>";
                            }

                            else {
                                echo $i. "<br>";
                            }
                        }

                    }

                    function greeting($fName, $lName){
                        echo "<h3>Hello ". $fName . " ". $lName. "</h3><br>";
                    }


                    $fName = $_POST['fname'];
                    $lName = $_POST['lname'];
                    $starting_num = $_POST['starting-number'];
                    $ending_num = $_POST['ending-number'];
                    $first_word = $_POST['1stword'];
                    $first_number =$_POST['1stnumber'];
                    $second_word = $_POST['2ndword'];
                    $second_number =$_POST['2ndnumber'];
                    $third_word = $_POST['3rdword'];
                    $third_number =$_POST['3rdnumber'];


                    greeting($fName, $lName);
                    echo "<h4>Here are your results</h4><br>";
                    calculateFizzBuzz($starting_num, $ending_num, $first_word, $first_number, $second_word,
                        $second_number, $third_word, $third_number);

                }


                ?>
            </div>

        </div>
    </div>

</div>