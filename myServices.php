<!-- Some codes in this file are understood and implemented from Week10 lecture activity 6 of Web programming COSC2413 -->

<?php require_once('includes/authorise.php'); ?>
<?php $services = getServices(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content= "Layout">
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8">
    <title>My services</title>

    <link rel = 'stylesheet' href='stylesheet/layout.css' type='text/css'>
</head>
<body>
    <div class= "wrapper">

        <!-- require_once used to connect this php code with the header fragment inside includes -->
        <?php require_once("includes/header.php"); ?>
        
        <!-- require_once used to connect this php code with the navbar fragment inside includes -->
        <?php require_once("includes/navbar.php"); ?>
        
        <div class="box content">
            <h3 class = 'stretchingheader'>Your Services</h3>

            <h4 class = "services_text">Choose from our many great services!</h4>

            <div class= "icons_container">
                <?php foreach($services as $service) { ?>
                    <!-- this id will come from the database -->
                    <span class= "service_icons">
                        <a href="service.php?id=<?php echo $service['service_id']; ?>">
                            <img src="<?php echo $service['image_path']; ?>" class="service" />
                            <h3><?php echo $service['name']; ?></h3>
                        </a>
                    </span>
                <?php } ?>
            </div>
        </div>
        
        <!-- require_once used to connect this php code with the footer fragment inside includes -->
        <?php require_once("includes/footer.php"); ?>
        
    </div>
    
</body>
</html>