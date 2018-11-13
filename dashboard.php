<div class="container-fluid margin-top-30px">



    <?php if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])):  ?>

        <?php





        //Set or Get user profile picture

        function setOrGetProfilePicture(){



            $profilePicturePath = "";



            include('database/login.php');



            $username = $_SESSION["username"];



            $stmt = $db->prepare("Select profilePicture from members where username = ?");

            $stmt->bind_param("s", $username);



            $stmt->execute();



            $stmt->bind_result($profilePicturePath);



            $stmt->fetch();



            $stmt->close();





            include('database/close_connection.php');



            return $profilePicturePath;

        }





        $profilePicturePath = setOrGetProfilePicture();







        if (isset($_POST['change-password'])) {

            include('database/login.php');





            $username = $_SESSION["username"];

            $current_password = $_POST['current-password'];

            $new_password = password_hash($_POST['new-password'], PASSWORD_BCRYPT);



            $stmt1 = $db->prepare("Select password from members where username = ?");

            $stmt1->bind_param("s", $username);



            $stmt1->execute();



            $stmt1->bind_result($passwordFromDatabase);



            $stmt1->fetch();





            if (!password_verify($current_password, $passwordFromDatabase)){

                echo '<script type="text/javascript">alert("Sorry, you typed the wrong current password. Please try again\n Your password is unchanged");</script>';

            }



            else {

                $stmt1->close();



                $stmt = $db->prepare("Update members set password = ? where username = ?");

                $stmt->bind_param("ss", $new_password, $username);





                if ($stmt->execute() === TRUE) {

                    echo '<script type="text/javascript">alert("Password Changed. \n You must sign in again ");</script>';

                    include('logout.php');

                } else {

                    echo '<script type="text/javascript">alert("An error occurred while updating your password.\n Your password is unchanged");</script>';

                }

            }



            include('database/close_connection.php');

        }



        if (isset($_POST['deleteAccount'])) {

            include('database/login.php');





            $username = $_SESSION["username"];





            $stmt = $db->prepare("Delete from members where username = ?");

            $stmt->bind_param("s", $username);





            if ($stmt->execute() === TRUE) {

                $stmt->close();

                echo '<script type="text/javascript">alert("Account successfully deleted. \n We are sorry to see you go :( ");</script>';

                include('logout.php');

            }

            else{

                $stmt->close();

                echo '<script type="text/javascript">alert("An error occurred while deleting your account.\n Your account is unchanged");</script>';

            }



            include('database/close_connection.php');



        }



        if (isset($_POST['profile-picture'])){



            include('database/login.php');



            $username = $_SESSION["username"];



            $stmt = $db->prepare("Select id from members where username = ?");

            $stmt->bind_param("s", $username);



            $stmt->execute();



            $stmt->bind_result($id);



            $stmt->fetch();



            $stmt->close();





            //Create user directory to store profile pictures

            $directoryName = "images/profile-pictures/$id";



            //Check if user directory already exists.

            if(!is_dir($directoryName)) {

                //Directory does not exist, so lets create it.

                mkdir($directoryName, 0755);

            }





                $target_dir = "images/profile-pictures/$id/";

                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

                $uploadOk = 1;

                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                // Check if image file is a actual image or fake image

                if(isset($_POST["submit"])) {

                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

                    if($check !== false) {

                        echo "File is an image - " . $check["mime"] . ".";

                        $uploadOk = 1;

                    } else {

                        echo "File is not an image.";

                        $uploadOk = 0;

                    }

                }



                // Check file size

                if ($_FILES["fileToUpload"]["size"] > 5000000) {

                    echo "Sorry, your file is too large. Please use a picture whose size is smaller than 5 MB";

                    $uploadOk = 0;

                }

                // Allow certain file formats

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

                    && $imageFileType != "gif" ) {

                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

                    $uploadOk = 0;

                }



                // Check if $uploadOk is set to 0 by an error

                if ($uploadOk == 0) {

                    echo "<br>Sorry, your file was not uploaded.";

                    // if everything is ok, try to upload file

                } else {



                    //Clear any old profile pictures for user

                    $files = glob("images/profile-pictures/$id/*"); //get all file names

                    foreach($files as $file){

                        if(is_file($file))

                            unlink($file); //delete file

                    }







                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {



                        $stmt = $db->prepare("Update members set profilePicture = ? where id = ?");

                        $stmt->bind_param("si", $target_file, $id);



                        if($stmt->execute()== true){

                            $profilePicturePath = setOrGetProfilePicture();



                        }

                        else{

                            echo "Sorry, there was an error uploading your file." . $db->error;

                        }



                        $stmt->close();





                    } else {



                    }

                }

            include('database/close_connection.php');



        }



        ?>





        <div class="row">

            <div class="col-xl-12">

                <h1 class="text-center">Dashboard</h1>

            </div>

        </div>





                <img src="<?php echo "$profilePicturePath"; ?>" alt="Profile Picture"  class="img-fluid maximum-height-250px border-radius-100px center">







        <div class="row margin-top-30px">

            <div class="col-xl-6 offset-xl-4">

                <form action="#" method="post" enctype="multipart/form-data">

                    Choose a profile picture:

                    <input type="file" name="fileToUpload" id="fileToUpload">

                    <input type="submit" value="Change image" name="profile-picture">

                </form>

            </div>

        </div>



        <div class="row">

            <div class="col-xl-12">

                <h1>Customization</h1>

                <hr>

                <div class="col-xl-3">

                    <label for="cp1" class="col-form-label">Change website background color:</label>



                    <input id="cp1" type="text" class="form-control input-lg" value=""  onchange="changeBackgroundColor()"/>

                    <script>

                        $(function () {

                            $('#cp1').colorpicker();

                        });

                    </script>

                </div>

            </div>

        </div>







        <div class="row margin-top-60px">

            <div class="col-xl-12">

                <h1>Settings</h1>

                <hr>

            </div>

        </div>





        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changePasswordModal">

            Change your password

        </button>



        <!-- Modal -->

        <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLabel">Change your password</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">



                        <form method ="post" action="#">



                            <div class="form-group row margin-top-60px">

                                <label for="current-password" class="col-xl-4 offset-xl-1  col-form-label">Current Password</label>

                                <div class="col-xl-5">

                                    <input type="password" class="form-control" id="current-password" placeholder="Current Password" name="current-password"  required>

                                </div>

                            </div>





                            <div class="form-group row">

                                <label for="new-password" class="col-xl-4 offset-xl-1  col-form-label"> New Password</label>

                                <div class="col-xl-5">

                                    <input type="password" class="form-control" id="new-password" placeholder="New Password" name="new-password" onkeyup="checkOldPass();" required>

                                    <span id="confirmMessage" class="confirmMessage"></span>

                                </div>

                            </div>



                            <div class="form-group row">

                                <label for="confirm-password" class="col-xl-4 offset-xl-1  col-form-label">Confirm Password</label>

                                <div class="col-xl-5">

                                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" name="confirm-password" onkeyup="checkNewPass();" required>

                                    <span id="confirmMessage1" class="confirmMessage"></span>

                                </div>

                            </div>





                            <div class="form-group row margin-top-60px">

                                <div class="col-sm-10 offset-xl-7">

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    <button type="submit" class="btn btn-primary" name="change-password" id="submit-button">Update</button>

                                </div>

                            </div>

                        </form>

                    </div>



                </div>

            </div>

        </div>



        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteAccount">

            Delete Your Account

        </button>



        <!-- Modal -->

        <div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="deleteAccount" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete your account?</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">

                        This action cannot be undone.

                    </div>



                    <div class="modal-footer">

                        <form method ="post" action="#">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            <button type="submit" class="btn btn-danger" name="deleteAccount" id="submit-button">Delete</button>



                        </form>

                    </div>



                </div>

            </div>

        </div>



    <?php else: ?>

        <script>window.location="http://www.carbuyersguide.online/template_loader.php?p=login_or_register.php"</script>



    <?php endif; ?>



    <script>





        function checkOldPass()

        {

            //Store the password field objects into variables ...

            var pass1 = document.getElementById('current-password');

            var pass2 = document.getElementById('new-password');

            //Store the Confimation Message Object ...

            var message = document.getElementById('confirmMessage');

            //Set the colors we will be using ...

            var goodColor = "#29bc20";

            var badColor = "#ff6666";

            var neutral = "#fff";

            //Compare the values in the password field

            //and the confirmation field

            if (pass1.value == pass2.value) {

                //The passwords do match.

                //Set the color to the bad color and

                //notify the user.

                pass2.style.backgroundColor = badColor;

                message.style.color = badColor;

                message.innerHTML = "Old and New password cannot be the same!"

                document.getElementById("submit-button").disabled = true;

            }else{

                pass2.style.backgroundColor = neutral;

                message.innerHTML = ""

                document.getElementById("submit-button").disabled = false;

            }

        }

        function checkNewPass()

        {

            //Store the password field objects into variables ...

            var pass1 = document.getElementById('new-password');

            var pass2 = document.getElementById('confirm-password');

            //Store the Confimation Message Object ...

            var message = document.getElementById('confirmMessage1');

            //Set the colors we will be using ...

            var goodColor = "#29bc20";

            var badColor = "#ff6666";

            //Compare the values in the password field

            //and the confirmation field

            if (pass1.value == pass2.value) {

                //The passwords match.

                //Set the color to the good color and inform

                //the user that they have entered the correct password

                pass2.style.backgroundColor = goodColor;

                message.style.color = goodColor;

                message.innerHTML = "Passwords Match!"

                document.getElementById("submit-button").disabled = false;

            } else {

                //The passwords do not match.

                //Set the color to the bad color and

                //notify the user.

                pass2.style.backgroundColor = badColor;

                message.style.color = badColor;

                message.innerHTML = "Passwords Do Not Match!"

                document.getElementById("submit-button").disabled = true;

            }

        }



        function changeBackgroundColor() {

            document.body.style.backgroundColor = document.getElementById("cp1").value;



            var xhttp = new XMLHttpRequest();



            xhttp.open("POST", "?p=saveUserColor.php", true);

            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhttp.send("color="+document.body.style.backgroundColor);



        }



    </script>





</div>