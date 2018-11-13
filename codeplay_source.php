<div class="container-fluid margin-top-30px">

    <div class="row">
        <div class="col-xl-12">
            <h1 class="text-center">CodePlay Source File</h1>
        </div>
    </div>

    <div class="row margin-top-30px">
        <div class="col-xl-7 offset-xl-3 bg-light">
            <?php

            function display($fileInfo){
                echo "<b>Contents of code_play_source_file.txt</b> <br><br> ". "<pre>$fileInfo</pre>";
            }

            $myFile = fopen("codeplay_source.txt", "r") or die("Unable to open file!");
            $fileInfo = fread($myFile, filesize("codeplay_source.txt"));
            fclose($myFile);

            display($fileInfo);

            ?>
        </div>
    </div>


</div>