<!-- Codes in this file are understood and written from Week10 lecture activity 6 of Web programming COSC2413 -->
<?php require_once('includes/authorise.php'); ?>

<?php
    $id = (int) $_GET['id'];
    $service = getService($id);
    // $meal = getMealID($id);

    // if there are not errors then to call the function called recordAcitivity
    $errors = [];
    if(isset($_POST['activity'])) {
        $email = getLoggedInUser()['email'];

        $errors = recordActivity($email, $id, $_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content= "Layout">
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8">
    <title>services</title>

    <link rel = 'stylesheet' href='stylesheet/layout.css' type='text/css'>
         
</head>
<body>
    <div class= "wrapper">

        <!-- require_once used to connect this php code with the header fragment inside includes -->
        <?php require_once("includes/header.php"); ?>
        
        <!-- require_once used to connect this php code with the navbar fragment inside includes -->
        <?php require_once("includes/navbar.php"); ?>
        
        
        <div class="box content">

            <div class = "icons_container">
                <h3 class= "services_text">
                    <h3 class = 'stretchingheader'>
                        <?php echo $service['name']; 
                        echo "<br>"; ?>
                    </h3>
                    <img src="<?php echo $service['image_path']; ?>" />
                </h3>
            </div>

            <div class="service_options">
                <?php if($id === 1) { ?>

                    <?php ?>
                    <?php if(!isset($_POST['type'])) { ?>
                    
                        <!-- getServiceInstructions($id) will get the service instructions for yoga if yoga is selected-->
                        <?php $serviceInstructions = getServiceInstructions($id); ?>
                        
                        <form method="post">
                            <p class="services_text">Choose from our three levels of yoga</p>

                            <fieldset>
                                <legend>Levels</legend>
                                <div class= "registrationcontainer">
                                    <?php foreach($serviceInstructions as $serviceInstruction) { ?>
                                
                                        <!-- service_type will get the 3 options of yoga service if yoga is selected -->
                                        <?php $t = $serviceInstruction['service_type']; ?>

                                        <input type="radio" 
                                            id="<?php echo $t; ?>" name="type" value="<?php echo $t; ?>" />

                                        <label for="<?php echo $t; ?>"><?php echo $t; ?></label>
                                    <?php } ?>

                                    <?php if(isset($_POST['service'])) { ?>
                                        <div class="errormessages">You must select a yoga type</div>
                                    <?php } ?>
                                </div>

                                <span class = "service_buttons">
                                    <button type="submit" class="submitbutton_services" name="service">Go</button>
                                    <a href="myServices.php" class="submitbutton_services">Services Page</a>
                                </span>
                            </fieldset>
                        </form>
                    <?php } else { ?>
                        <?php $serviceInstruction = getServiceInstruction($id, $_POST['type']); ?>

                        <h3 class="services_text"><?php echo $serviceInstruction['service_type']; ?></h3>
                        <!-- Getting the video contents of yoga -->

                        <div class="videodiv_services">
                            <video controls width="450">
                                <!-- path refers to the video path that is coming from the database -->
                                <source src="<?php echo $serviceInstruction['path']; ?>" type="video/mp4">
                            </video>
                        </div>

                        <!-- This is for keeping track of the duration -->
                        <?php if(!isset($_POST['activity']) || count($errors) > 0) { ?>
                            <form method="post">
                                <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>" />

                                <div>
                                    <label for="duration" class="services_text">Duration (minutes)</label>
                                    <input type="text" id="duration" name="duration"
                                        <?php displayValue($_POST, 'duration'); ?> />
                                    <?php displayError($errors, 'duration'); ?> 
                                </div>

                                <div class = "yoga_levels_buttons">
                                    <button type="submit" class="submitbutton_services" name="activity">Record Activity</button>
                                    <a href="" class="submitbutton_services">Cancel</a>
                                </div>
                            </form>
                        <?php } else { ?>
                            
                            <div class="success_message">
                                You have successfully recorded <strong><?php echo $_POST['duration']; ?> minutes</strong> of
                                <strong><?php echo $_POST['type']; ?> Yoga<br></strong>
                            </div>
                            
                            <div><br><br>
                                <a href="" class="submitbutton_services">More <?php echo $service['name']; ?></a>
                                <a href="myServices.php" class="submitbutton_services">All Services</a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                
                <?php } else if($id === 2) { ?>

                    <?php ?>
                    <?php if(!isset($_POST['type'])) { ?>
                    
                        <!-- getServiceInstructions($id) will get the service instructions for meditation if meditation is selected-->
                        <?php $serviceInstructions = getServiceInstructions($id); ?>
                        
                        <form method="post">
                            <p class="services_text">Choose video or audio medium of doing meditation</p>

                            <fieldset>
                                <legend>Mediums</legend>
                                <div class= "registrationcontainer">
                                    <?php foreach($serviceInstructions as $serviceInstruction) { ?>
                                
                                        <!-- service_type will get the 3 options of meditation service if meditation is selected -->
                                        <?php $t = $serviceInstruction['service_type']; ?>

                                        <input type="radio" 
                                            id="<?php echo $t; ?>" name="type" value="<?php echo $t; ?>" />

                                        <label for="<?php echo $t; ?>"><?php echo $t; ?></label>
                                    <?php } ?>

                                    <?php if(isset($_POST['service'])) { ?>
                                        <div class="errormessages">You must select a yoga type</div>
                                    <?php } ?>
                                </div>

                                <span class = "service_buttons">
                                    <button type="submit" class="submitbutton_services" name="service">Go</button>
                                    <a href="myServices.php" class="submitbutton_services">Services Page</a>
                                </span>
                            </fieldset>
                        </form>
                    <?php } else { ?>
                        <?php $serviceInstruction = getServiceInstruction($id, $_POST['type']); ?>

                        <h3 class="services_text"><?php echo $serviceInstruction['service_type']; ?></h3>
                        <!-- Getting the video contents of meditation -->

                        <div class="videodiv_services">
                            <video controls width="450">
                                <!-- path refers to the video path that is coming from the database -->
                                <source src="<?php echo $serviceInstruction['path']; ?>" type="video/mp4">
                            </video>
                        </div>

                        <!-- This is for keeping track of the duration -->
                        <?php if(!isset($_POST['activity']) || count($errors) > 0) { ?>
                            <form method="post">
                                <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>" />

                                <div>
                                    <label for="duration" class="services_text">Duration (minutes)</label>
                                    <input type="text" id="duration" name="duration"
                                        <?php displayValue($_POST, 'duration'); ?> />
                                    <?php displayError($errors, 'duration'); ?> 
                                </div>

                                <div class = "yoga_levels_buttons">
                                    <button type="submit" class="submitbutton_services" name="activity">Record Activity</button>
                                    <a href="" class="submitbutton_services">Cancel</a>
                                </div>
                            </form>
                        <?php } else { ?>
                            <div class="success_message">
                                You have successfully recorded <strong><?php echo $_POST['duration']; ?> minutes</strong> of
                                <strong><?php echo $_POST['type']; ?> Meditation<br></strong>
                            </div>
                            
                            <div><br><br>
                                <a href="" class="submitbutton_services">More <?php echo $service['name']; ?></a>
                                <a href="myServices.php" class="submitbutton_services">All Services</a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                
                <?php } else if($id === 3) { ?>
                    <?php ?>
                    <?php if(!isset($_POST['type'])) { ?>
                        <!-- getServiceInstructions($id) will get the service instructions for stretching if stretching is selected-->
                        <?php $serviceInstructions = getServiceInstructions($id); ?>
                        
                        <form method="post">
                            <p class="services_text">Choose stretching level</p>
                            
                            <fieldset>
                                <legend>Levels</legend>
                                <div class= "registrationcontainer">
                                    <?php foreach($serviceInstructions as $serviceInstruction) { ?>
                                        <!-- service_type will get the 3 options of stretching service if yoga is selected -->
                                        <?php $t = $serviceInstruction['service_type']; ?>
                                        
                                        <input type="radio" 
                                            id="<?php echo $t; ?>" name="type" value="<?php echo $t; ?>" />
                                        <label for="<?php echo $t; ?>"><?php echo $t; ?></label>
                                    <?php } ?>
                                    <?php if(isset($_POST['service'])) { ?>
                                        <div class="errormessages">You must select a yoga type</div>
                                    <?php } ?>
                                </div>
                                
                                <span class = "service_buttons">
                                    <button type="submit" class="submitbutton_services" name="service">Go</button>
                                    <a href="myServices.php" class="submitbutton_services">Services Page</a>
                                </span>
                            </fieldset>
                        </form>
                    <?php } else { ?>
                        <?php $serviceInstruction = getServiceInstruction($id, $_POST['type']); ?>
                        
                        <h3 class="services_text"><?php echo $serviceInstruction['service_type']; ?></h3>
                        
                        <!-- Getting the contents of stretching -->
                        <div class="videodiv_services">
                            <video controls width="450">
                                <!-- path refers to the video path that is coming from the database -->
                                <source src="<?php echo $serviceInstruction['path']; ?>" type="video/mp4">
                            </video>
                        </div>
                        
                        <!-- This is for keeping track of the duration -->
                        <?php if(!isset($_POST['activity']) || count($errors) > 0) { ?>
                            <form method="post">
                                <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>" />
                                
                                <div>
                                    <label for="duration" class="services_text">Duration (minutes)</label>
                                    <input type="text" id="duration" name="duration"
                                        <?php displayValue($_POST, 'duration'); ?> />
                                    <?php displayError($errors, 'duration'); ?> 
                                </div>
                                
                                <div class = "yoga_levels_buttons">
                                    <button type="submit" class="submitbutton_services" name="activity">Record Activity</button>
                                    <a href="" class="submitbutton_services">Cancel</a>
                                </div>
                            </form>
                            
                        <?php } else { ?>
                            <div class="success_message">
                                You have successfully recorded <strong><?php echo $_POST['duration']; ?> minutes</strong> of
                                <strong><?php echo $_POST['type']; ?> Stretching<br></strong>
                            </div>
                            
                            <div><br><br>
                                <a href="" class="submitbutton_services">More <?php echo $service['name']; ?></a>
                                <a href="myServices.php" class="submitbutton_services">All Services</a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } else if($id === 4) { ?>
                    <?php ?>
                    <?php if(!isset($_POST['type'])) { ?>
                        <!-- getMeals($type) will get the service instructions for healthy habbits-->
                        <?php $meals = getMeals($id); ?>
                        
                        <form method="post">
                            <p class="services_text">Choose from our different types of diet</p>
                            
                            <fieldset>
                                <legend>Diet options </legend>
                                <div class= "registrationcontainer">
                                    <?php foreach($meals as $meal) { ?>
                                        <?php $t = $meal['type']; ?>
                                        
                                        <input type="radio" 
                                            id="<?php echo $t; ?>" name="type" value="<?php echo $t; ?>" />
                                        <label for="<?php echo $t; ?>"><?php echo $t; ?></label>
                                    <?php } ?>
                                    <?php if(isset($_POST['service'])) { ?>
                                        <div class="errormessages">You must select a diet type</div>
                                    <?php } ?>
                                </div>
                                
                                <span class = "service_buttons">
                                    <button type="submit" class="submitbutton_services" name="service">Go</button>
                                    <a href="myServices.php" class="submitbutton_services">Services Page</a>
                                </span>
                            </fieldset>
                        </form>
                    <?php } else { ?>
                        <?php $meal = getMeal($type, $_POST['type']); ?>
                        
                        <h3 class="services_text"><?php echo $meal['meal_id']; ?></h3>
                        


                    <?php } ?>
                <?php } ?>








            </div>

        </div>

        
        <!-- require_once used to connect this php code with the footer fragment inside includes -->
        <?php require_once("includes/footer.php"); ?>
        
    </div>
    
</body>
</html>