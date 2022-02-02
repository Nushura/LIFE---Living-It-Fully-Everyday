<!DOCTYPE html>
<html lang="en">
<head>
    <title>contact us</title>
    <meta name="keywords" content= "Layout">
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8">
  
    <link rel = 'stylesheet' href='stylesheet/layout.css' type='text/css'>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <!-- Include the plugin. -->
    <script src="plugins/jquery.validate.js"></script>

    <!-- Write JS code to use the plugin. -->
    <script src="scripts/contact.js"></script>
</head>
<body>
    <div class= "wrapper">

        <!-- require_once used to connect this php code with the header fragment inside includes -->
        <?php require_once("includes/header.php"); ?>
        
        <!-- require_once used to connect this php code with the navbar fragment inside includes -->
        <?php require_once("includes/navbar.php"); ?>
        
        <div class="box content">
            <h3 class = 'contactheader'>Contact Us</h3>

            <div class = "formcontainer">
                
                <p class="contactinfo">Please fill up this form and one of our team members will reach out to you soon. Thank you!</p>

                <form id="contact_registration" action="mailto:LIFE@localcouncil.com" method="POST">

                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Your first name..." />

                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Your last name..." />

                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Your address..." />

                    <label for="phone">Phone no.</label>
                    <input type="tel" name="phone" id="phone" placeholder="Phone no...." />

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email address..." />

                    <label for="message">Enquiry</label>
                    <textarea id="message" name="message" cols="40" rows="10" placeholder="Type your enquiry here.." required></textarea>
                
                    <button type="submit">Submit</button>
                </form>

                <!-- enctype is used so that the mail can be sent as a plain text -->
                <!-- <form class="contact_form" id="registration_form" name= "registration_form" action="mailto:LIFE@localcouncil.com" method="post" enctype="text/plain"> -->
                
            </div>
            
        </div>
        
        <!-- require_once used to connect this php code with the footer fragment inside includes -->
        <?php require_once("includes/footer.php"); ?>
        
    </div>
    
    
</body>
</html>