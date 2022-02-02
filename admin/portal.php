<!--Information regarding how to implement api is understood from W10 lecture -->

<?php require_once('includes/functions.php'); ?>

<?php
    // $city = 'Melbourne';

    // Weather API documentation: https://www.weatherapi.com
    const API_KEY = 'd2f321fc57a9481097d42617211510';
    
    $city = 'Melbourne';

    // url from the website documentation
    $url = "http://api.weatherapi.com/v1/current.json?key=d2f321fc57a9481097d42617211510&q=melbourne&aqi=". API_KEY;

    // Send GET request.
    $json = file_get_contents($url);

    // Decode returned JSON string to array for processing.
    $data = json_decode($json, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin Portal</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    
    <!-- Add jQuery and Bootstrap JS necessary CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>

    <script>
        function searchServices() {
            // Sending AJAX request to the server and update the page
            const name = $("#name").val();
            $.get("search-services.php", { name }).done(function (data) {
                // Update the document with the returned HTML after search is done.
                // That means whatever is searched by the user, the result will be shown 
                // The place where it will be show is in this html document where the id is set to searched_services
                $("#searched_services").html(data);
            });
        }

        $(document).ready(function () {
            // Load the initial page data
            searchServices();

            // Perform AJAX request and update the page when the form is submitted
            $("#search").submit(function (e) {
                // Prevent the form from submitting by using the preventDefault function
                e.preventDefault();

                // Send AJAX request
                searchServices();
            });
        });
    </script>

</head>
<body>
    <!-- The class implementation below is underwstood from bootstrap documentation pages -->
    <div class="jumbotron p-3 mb-2 bg-info text-white">
        <div class="container text-left d-inline">
            <h1 class="font-weight-bold">LIFE</h1>
            <h3 class="font-italic">Living It Fully Everyday</h3>
            <?php if(isset($data)) { ?>

                <?php
                    $current = $data['current'];
                    $symbol = strtoupper($current['temp_c']);

                    $condition = $current['condition'];

                    echo $symbol;
                    echo " °C";
                ?>

            <?php } ?>
        </div>

    </div>

    <div class="container">
        <div class="jumbotron text-center shadow p-5 mb-5 bg-white rounded">
            <h1>Admin Portal</h1>
            <p class="lead">Use the search bar below to look for your required service data</p>

            <form id="search">
                <div class="form-group">
                    <div rows="3">
                        <label for="name" class="control-label"></label>
                        <input type="text" id="name" class="form-control form-rounded border border-info shadow p-4 mb-5 bg-white rounded" placeholder="Service name"/>
                    </div>
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary border border-dark" value="Search" name=""searchButton/>
                </div>
            </form>

        </div>

        <div id="searched_services" class="text-center"></div>
        
        <hr />
        <footer>
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright &copy; 2021 LIFE</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#" class="text-dark">Terms of Use</a>
                    <span class="text-muted mx-2">|</span>
                    <a href="#" class="text-dark">Privacy Policy</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
