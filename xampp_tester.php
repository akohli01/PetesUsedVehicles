<div class="container-fluid margin-top-30px">

    <div class="row">
        <div class="col-xl-12">
            <h1 class="text-center">XAMPP Test</h1>
        </div>
    </div>

    <div class="row margin-top-30px">
        <div class="col-xl-12">
            <?php
            $sOutputString = "";

            for($iCounter = 1; $iCounter <= 50; $iCounter++)
            {
                $sOutputString .= $iCounter . ") Amit is using PHP running on his computer!! <br> ";
            }

            echo ("<h5 class = \"text-center\">".$sOutputString. "</h5>");

            ?>
        </div>
    </div>

</div>
