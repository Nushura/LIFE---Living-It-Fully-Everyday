<?php require_once('includes/functions.php'); ?>

<!-- The code below is indicating to that 
if the register button is pressed then to call 
another function called registerUser, which is written in the functions file-->
<?php 
    $errors = [];
    if(isset($_POST['register'])) {
        $errors = registerUser($_POST);

        if(count($errors) === 0)
            redirect('myServices.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>registration</title>
    <meta name="keywords" content="Layout">
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8">

    <link rel='stylesheet' href='stylesheet/layout.css' type='text/css'>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script> -->
</head>

<body>
    <noscript>Please enable JavaScript in browser</noscript>

    <div class="wrapper">

        <!-- require_once used to connect this php code with the header fragment inside includes -->
        <?php require_once("includes/header.php"); ?>
        
        <!-- require_once used to connect this php code with the navbar fragment inside includes -->
        <?php require_once("includes/navbar.php"); ?>

        <div class="box content">
            <h3 class='contactheader'>Registration</h3>

            <div class="formcontainer">

                <p class="contactinfo">Please fill up the form below to register</p>

                <form name="membershipRegistration" id="registration_form" action=" " method="post" >
                    <fieldset>
                        <legend>Form</legend>

                        <div class="registrationcontainer">

                            <div>
                                <label for="firstname">First Name*</label>
                            </div>
                            <div>
                                <input type="text" id="firstname" name="firstname"
                                    <?php displayValue($_POST, 'firstname'); ?> />
                                <?php displayError($errors, 'firstname') ;?>
                            </div>

                            <div>
                                <label for="lastname">Last Name*</label>
                            </div>
                            <div>
                                <input type="text" id="lastname" name="lastname"
                                    <?php displayValue($_POST, 'lastname'); ?> />
                                <?php displayError($errors, 'lastname') ;?>
                            </div>

                            <div>
                                <label for="email">Email*</label>
                            </div>
                            <div>
                                <input type="text" id="email" name="email"
                                    <?php displayValue($_POST, 'email') ;?> />
                                <?php displayError($errors, 'email');?>
                            </div>

                            <div>
                                <label for="confirmemail">Confirm Email*</label>
                            </div>
                            <div>
                                <input type="email" id="confirmemail" name="confirmemail" onpaste="return false"
                                    <?php displayValue($_POST, 'confirmemail') ;?> />
                                <?php displayError($errors, 'confirmemail');?>
                            </div>

                            <div>
                                <label for="phoneno">Phone number*<br><small class="text-muted">(format:<br>+61 4xx xxx xxx)</small></label>
                            </div>
                            <div>
                                <input type="text" id="phoneno" name="phoneno"
                                    <?php displayValue($_POST, 'phoneno') ;?> />
                                <?php displayError($errors, 'phoneno');?>                            
                            </div>

                            <div>
                                <label for="age">Age*<br><small class="text-muted">(must be at least 16)</small></label>
                            </div>
                            <div class="agerange">
                                <input type="range" id="age" min="1" max="90" name="age" class="slider">
                                <p class="value">Value: <span id="age-answer"></span> years old</p>
                                    <?php displayValue($_POST, 'age') ;?>
                                    <?php if(!isset($_POST['age'])); ?>

                                <div>
                                    <?php displayError($errors, 'age');?>                                
                                </div>
                            </div>

                            <div>
                                <label for="studentstatus">Student*</label>
                            </div>
                            <div>
                                <input type="radio" id="student" name="studentstatus" value="true"
                                    <?php displayChecked($_POST, 'studentstatus', 'true'); ?> />
                                <label for="student">Yes</label><br>

                                <input type="radio" id="notstudent" name="studentstatus" value="false"
                                    <?php displayChecked($_POST, 'studentstatus', 'false'); ?> />
                                <label for="notstudent">No</label>

                                <div>
                                    <?php displayError($errors, 'studentstatus'); ?>                            
                                </div>
                            </div>

                            <div>
                                <label for="employmentstatus">Employed*</label>
                            </div>
                            <div>
                                <input type="radio" id="employed" name="employmentstatus" value="true"
                                    <?php displayChecked($_POST, 'employmentstatus', 'true'); ?> />
                                <label for="employed">Yes</label><br>

                                <input type="radio" id="notemployed" name="employmentstatus" value="false"
                                    <?php displayChecked($_POST, 'employmentstatus', 'false'); ?> />
                                <label for="notemployed">No</label>

                                <div>
                                    <?php displayError($errors, 'employmentstatus'); ?>                            
                                </div>

                            </div>

                            <div>
                                <label for="password">Password*<br><small class="text-muted">(must be at least 8 characters)</small></label>
                            </div>
                            <div>
                                <input type="password" id="password" name="password" />
                                <?php displayError($errors, 'password'); ?>
                            </div>


                            <div>
                                <label for="confirmPassword">Confirm password*</label>
                            </div>

                            <div>
                                <input type="password" id="confirmPassword" name="confirmPassword" />
                                <?php displayError($errors, 'confirmPassword'); ?>
                            </div>

                            <div>
                                <input type="submit" value="Register" name="register" class="submitbutton">
                            </div>
                        </div>

                    </fieldset>

                </form>

            </div>

            <script>
                var slider = document.getElementById("age");
                var result = document.getElementById("age-answer");
                slider.oninput = function () {
                    result.innerHTML = this.value;
                }

            </script>

        </div>

        <!-- require_once used to connect this php code with the footer fragment inside includes -->
        <?php require_once("includes/footer.php"); ?>
        
    </div>


</body>

</html>