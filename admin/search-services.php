<?php
    require_once('includes/functions.php');
    
    // Extract and trim the name variable from the URL 
    $name = trim(isset($_GET['name']) ? $_GET['name'] : '');

    // If name is empty then all services are returned
    $searched_services = getSearchedService($name);
?>

<?php if(count($searched_services) === 0) { ?>
    <p class="alert alert-info">No service name matches the search <strong>'<?php echo $name; ?>'</strong>/</p>
<?php } else { ?>
    <?php foreach($searched_services as $service) { ?>
        <picture>
            <img class="img-responsive ml-5" style="height: 175px;" src="<?php echo $service['image_path']; ?>" />
        </picture>
    <?php } ?>
<?php } ?>