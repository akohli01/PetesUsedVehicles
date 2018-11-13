<div class="container-fluid margin-top-30px">

    <div class="row">
        <div class="col-xl-12">
            <h1 class="text-center">Formerator Processor</h1>
        </div>
    </div>

    <div class="row margin-top-30px">
        <div class="col-xl-6 offset-xl-1">
            <h3>Pete's Used Vehicles has processed your form...</h3>
        </div>
    </div>

    <div class="row margin-top-30px">
        <div class="col-xl-6 offset-xl-1">
            <div class="bg-light">
                <?php



                if (isset($_POST['submit'])) {

                    $data = array();

                    foreach ($_POST as $key => $value) {
                        if($key == 'submit')
                            continue;
                        else
                            $data[$key] = $value;

                    }

                    if (in_array(null, $data)) {
                        echo "Sorry, your form is not <b>completely</b> filled out please fill it out.";

                    }



                    else {

                        echo "<h3>Your form used the POST method</h3>";


                        echo "<h3> Your form contained " . count($data) . " form inputs (not counting the submit input or any unfilled radio or check box inputs) </h3>";

                        foreach ($data as $key => $value) {
                            if (is_array($value)) {
                                echo "<br>$key is set to the following values: ";
                                foreach($value as $value_each){
                                    echo ", ". $value_each;
                                }
                            } else
                                echo "$key  was set to $value<br>";
                        }

                    }



                }

                if (isset($_GET['submit'])) {

                    $data = array();

                    foreach ($_GET as $key => $value) {
                        if($key == 'submit')
                            continue;
                        if($key == 'p')
                            continue;
                        $data[$key] = $value;
                    }

                    if (in_array(null, $data)) {
                        echo "Sorry, your form is not <b>completely</b> filled out please fill it out.";

                    }



                    else {

                        echo "<h3>Your form used the GET method</h3>";


                        echo "<h3> Your form contained " . count($data) . " form inputs (not counting the submit or hidden inputs or any unfilled radio or check box inputs) </h3>";

                        foreach ($data as $key => $value) {
                            if (is_array($value)) {
                                echo "<br>$key is set to the following values: ";
                                foreach($value as $value_each){
                                    echo ", ". $value_each;
                                }
                            } else
                                echo "$key  was set to $value<br>";
                        }

                    }
                }

                echo "<br><br><a href = \"?p=formerator_forms.php\" >Return to form page </a>";



                ?>
            </div>


        </div>
    </div>




</div>