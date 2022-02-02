<?php require_once('includes/functions.php'); ?>

<?php
    $errors = [];
    if(isset($_POST['login'])) {
        $errors = loginUser($_POST);

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

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>
</head>

<body>
    <noscript>Please enable JavaScript in browser</noscript>

    <div class="wrapper">

        <!-- require_once used to connect this php code with the header fragment inside includes -->
        <?php require_once("includes/header.php"); ?>
        
        <!-- require_once used to connect this php code with the navbar fragment inside includes -->
        <?php require_once("includes/navbar.php"); ?>

        <div class="box content">
            <h3 class='contactheader'>Login</h3>

            <div class="formcontainer">

                <form name="membershipLogin" id="login_form" action=" " method="post" >

                <p class="contactinfo">Login to access all your services!</p>

                <fieldset>
                        <legend>Login</legend>

                        <div class="registrationcontainer">

                            <div>
                                <label for="email">Email*</label>
                            </div>
                            <div>
                                <input type="text" id="email" name="email"
                                    <?php displayValue($_POST, 'email') ;?> />
                                <?php displayError($errors, 'email');?>
                            </div>

                            <div>
                                <label for="password">Password*</label>
                            </div>
                            <div>
                                <input type="password" id="password" name="password" />
                                <?php displayError($errors, 'password'); ?>
                            </div>

                            <div>
                                <input type="submit" value="Login" name="login" class="submitbutton">
                            </div>
                        </div>

                    </fieldset>

                </form>

            </div>

        </div>

        <!-- require_once used to connect this php code with the footer fragment inside includes -->
        <?php require_once("includes/footer.php"); ?>
        
    </div>


</body>

</html>