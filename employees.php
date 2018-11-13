<div class="container-fluid margin-top-30px">

    <div class="row">
        <div class="col-xl-12">
            <h1 class="text-center">Employees (Text-Driven Webpage) </h1>
        </div>
    </div>


    <form method ="post" action="#" name = "form1">
        <?php

        $file_content = file_get_contents("employee_list.txt");
        $file_content_separated_by_newline = explode("\n", $file_content);

        $final_array = array ();
        foreach ($file_content_separated_by_newline as $item)
        {
            $final_array[] = explode("||", $item);
        }

        ?>

        <div class="form-group">
            <label for="employee-form" class="col-xl-3 offset-xl-1 col-form-label">Search for Employees</label>
            <select class="form-control col-xl-3 offset-xl-1" id="employee-form" name="employee" onchange="submitForm()">
            <option value="select">Select...</option>
            <option value="<?php echo $final_array[0][1];?>"><?php echo $final_array[0][0]. " ". $final_array[0][1] ;?></option>
            <option value="<?php echo $final_array[1][1];?>"><?php echo $final_array[1][0]. " ". $final_array[1][1] ;?></option>
            <option value="<?php echo $final_array[2][1];?>"><?php echo $final_array[2][0]. " ". $final_array[2][1] ;?></option>
            <option value="<?php echo $final_array[3][1];?>"><?php echo $final_array[3][0]. " ". $final_array[3][1] ;?></option>
            <option value="<?php echo $final_array[4][1];?>"><?php echo $final_array[4][0]. " ". $final_array[4][1] ;?></option>
            <option value="<?php echo $final_array[5][1];?>"><?php echo $final_array[5][0]. " ". $final_array[5][1] ;?></option>
            <option value="<?php echo $final_array[6][1];?>"><?php echo $final_array[6][0]. " ". $final_array[6][1] ;?></option>
            <option value="<?php echo $final_array[7][1];?>"><?php echo $final_array[7][0]. " ". $final_array[7][1] ;?></option>
            <option value="<?php echo $final_array[8][1];?>"><?php echo $final_array[8][0]. " ". $final_array[8][1] ;?></option>
            <option value="<?php echo $final_array[9][1];?>"><?php echo $final_array[9][0]. " ". $final_array[9][1] ;?></option>
            </select>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-xl-1">
                <input type="submit" name="submit" id="formSubmit" class="d-none">
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-xl-6 offset-xl-3">
            <div class="bg-light">
                <?php
                if (isset($_POST['submit'])) {

                    $lastName = $_POST['employee'];

                    $index_holder;

                    for ($v = 0; $v < count($final_array); $v++) {

                        for ($w = 0; $w < count($final_array[$v]); $w++) {
                            if ($lastName == $final_array[$v][$w]) {
                                $index_holder = $v . " " . $w;
                            }

                        }
                    }

                    $index_holder = explode(" ", $index_holder);

                    $lName = $final_array[$index_holder[0]][$index_holder[1]];
                    $fName = $final_array[$index_holder[0]][$index_holder[1] -1];
                    $image = $final_array[$index_holder[0]][$index_holder[1] +1];
                    $phoneNumber = $final_array[$index_holder[0]][$index_holder[1] +2];
                    $email = $final_array[$index_holder[0]][$index_holder[1] +3];
                    $position = $final_array[$index_holder[0]][$index_holder[1] +4];
                    $position = substr($position,0,-3);




                    echo "<div class='center'>
                        <h2>$fName ". "$lName</h2>
                        <h3>$position</h3>
                        $image <br> <br>
                        <b>Phone Number:</b> $phoneNumber <br>
                        <b>Email:</b> $email
                        </div>";


                }
                ?>
            </div>
        </div>
    </div>

    <script>
        function submitForm() {

            var selectButton = document.getElementById('formSubmit');
            selectButton.click();
        }
    </script>
</div>