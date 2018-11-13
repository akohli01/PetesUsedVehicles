<div class="container-fluid margin-top-30px">

    <div class="row">
        <div class="col-xl-4 text-center">
            <h1>Original FizzBuzz</h1>
            <?php

            $value_1 = 3;
            $value_2 = 5;

            for ($i = 1; $i <= 100; $i++) {

                if ($i % $value_1 == 0 && $i % $value_2 == 0){
                    echo "<br>FizzBuzz";
                }

                else if ($i % $value_1 == 0) {
                    echo "<br>Fizz";
                }

                else if ($i % $value_2 == 0) {
                    echo "<br>Buzz";
                }

                else {
                    echo "<br>" . $i;
                }
            }
            ?>
        </div>
        <div class="col-xl-4 text-center">
            <h1>Brand Fizzbuzz</h1>
            <?php

            $value_1 = 3;
            $value_2 = 5;

            for ($i = 1; $i <= 100; $i++) {

                if ($i % $value_1 == 0 && $i % $value_2 == 0){
                    echo "<br>Pete's Vehicles";
                }

                else if ($i % $value_1 == 0) {
                    echo "<br>Pete's";
                }

                else if ($i % $value_2 == 0) {
                    echo "<br>Vehicles";
                }

                else {
                    echo "<br>" . $i;
                }


            }

            ?>
        </div>
        <div class="col-xl-4 text-center">
            <h1>Brand Fizzbuzz guide</h1>
            <span>Numbers divisible by 3 = Pete's</span><br>
            <span>Numbers divisible by 5 = Vehicles</span><br>
            <span>Numbers divisible by 3 and 5 = Pete's Vehicles</span><br>
        </div>
    </div>

</div>