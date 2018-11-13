<div class="container-fluid margin-top-30px">

    <div class="row">
        <div class="col-xl-12">
            <h1 class="text-center">CodePlay Results</h1>
        </div>
    </div>

    <div class="row margin-top-30px">
        <div class="col-xl-12">
            <h2 class="text-center">Hello everyone, my name is Amit Kohli. Today we will be fiddling around with some PHP.</h2>
        </div>
    </div>

    <div class="row margin-top-30px">
        <div class="col-xl-6 offset-xl-3 offset-md-0">
            <?php


            //Work with variables

            echo "<h4>First let us look at variables in PHP... </h4>";


            echo "PHP variables are identified using the '$' sign and can hold various data types including numbers, strings , and booleans <br><br>";


            echo "<h4>Let's look at a few examples...</h4>";

            //Create various variables

            $integer = 5;

            echo 'Hi, I am a variable named $integer and my value is ' .  $integer. ".<br>";

            $string = "Good luck";

            echo 'Hi, I am a variable named $string and my value is '.  "'$string'". ".<br>";

            $boolean = true;

            echo 'Hi, I am a variable named $boolean and my value is '.  $boolean ."<br><br>";

            //Work with arrays


            echo "<h4>Now we shall look at arrays...</h4>";

            echo "Arrays are used to multiple (usually homogeneous) values in a single variable. <br><br>";

            //Create an array to store names


            $names = ["Sam", "Bill", "George"];


            echo "A sample array has been created.. <br>";


            echo 'Hi, I am an array called $names. I have '. count($names). ' names which are <br>';


            foreach ($names as $name) {
                echo $name. '<br>';
            }

            echo "<br>";

            //Work with functions


            echo "<h4> Now let's work with functions... </h4>";


            echo "Functions are basically reusable 'actions'.<br>";


            echo "Functions allow you to write code that can accept values, modify them, and then return the result if needed.<br><br>";


            //Create a function to add two numbers

            function addNumbers($num1, $num2){
                return "The sum is " .($num1 + $num2);
            }

            echo "A function to add two numbers has been created. Now let us pass in two numbers. The numbers are 5 and 10.<br>... ";


            echo addNumbers(5,10);


            //Types of functions

            echo "<br><br>There are two basic types of functions: predefined and user-defined.";

            echo"<br>Predefined functions come in different categories such as string or numeric functions";

            echo "<br> An example would be a function to count the number of characters in a string";

            echo '<br><br>A variable called $string contains the words "Good luck".';

            echo 'The number of charaters in $string is '. strlen($string);

            echo "<br><br>";

            //Work with conditionals

            echo "<h4>Now let's us work with conditional statements</h4>";

            echo "Sometimes we want to make decisions in our code. To do that we use if and else statements.<br><br>";

            echo "Let's us compare two numbers and display the number that is greater.<br>";

            echo 'The numbers are 5 (located in $num1) and 10 (located in $num2)<br>';

            $num1 = 5;
            $num2 = 10;
            if ($num1 > $num2)

                echo $num1. " is greater than ". $num2;

            else
                echo $num2. " is greater than ". $num1;

            echo "<br><br>";

            //Various Practice

            echo "<h4>Now let's practice some basic math! ......</h4>";

            echo '5+6 = '. (5+6). "<br>";

            echo '5*6 = '. (5*6). "<br>";

            echo '50/10 = '. (50/10). "<br>";

            echo '50-7 = '. (50-7). "<br>";

            ?>

        </div>
    </div>


</div>