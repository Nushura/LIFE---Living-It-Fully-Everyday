<!DOCTYPE html>
<html lang="en">
<head>
    <title>faq</title>
    <meta name="keywords" content= "Layout">
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8">
  
    <link rel = 'stylesheet' href='stylesheet/layout.css' type='text/css'
</head>
<body>
    <div class= "wrapper">

        <!-- require_once used to connect this php code with the header fragment inside includes -->
        <?php require_once("includes/header.php"); ?>
        
        <!-- require_once used to connect this php code with the navbar fragment inside includes -->
        <?php require_once("includes/navbar.php"); ?>
        
        <!-- The content of FAQs was made by me -->
        <div class="box content">
            <h3 class = 'faqheader'>Frequently Asked Questions (FAQ)</h3>
            <div class="faqcontent">
                <div class ="questionone">
                    <h4>What should I do if I can't register on LIFE?</h4>
                    <p>Presuming you've attempted everything, there might be a problem with our system. Please re-check all your details and if it still does not work then please contact us through our contact us form and we will try to reply to you within 24 hours. However, if it is urgent then please feel free to call us. </p>
                </div>

                <div class ="questiontwo">
                    <h4>What to do if my password is not working?</h4>
                    <p>Please contact us through our contact us form, available on the footer our LIFE website.</p>
                </div>
                
                <div class ="questionthree">
                    <h4>Is my information secure?</h4>
                    <p>Yes. All your information are securely stored in our database.</p>
                </div>
                
                <div class ="questionfour">
                    <h4>Will the services really help me?</h4>
                    <p>We believe that it will as it is created to benefit our clients to its highest potential. All the contents present are carefully reviewed by specialist related to each field. However, if it does not fulfill your requirement then please feel free to drop your suggestion on improving our website through email or the contact us form. </p>
                </div>
            </div>
        </div>
        
        <!-- require_once used to connect this php code with the footer fragment inside includes -->
        <?php require_once("includes/footer.php"); ?>
        
    </div>
    
    
</body>
</html>