<!-- Codes in this file is understood and written from Week9 lab activity 3 of Web programming COSC2413 -->

<?php

require_once('database_functions.php');

// Constants
const USER_SESSION_KEY = 'user';

// Starting the session
session_start();

// __________________Utils____________________
function displayError($errors, $name) {
    if(isset($errors[$name]))
        echo "<div class='errormessages'>{$errors[$name]}</div>";
}

function displayValue($form, $name) {
    if(isset($form[$name]))
        echo 'value="' . htmlspecialchars($form[$name]) . '"';
}

function displayChecked($form, $name, $value){
    if(isset($form[$name]) && ($form[$name]) === $value)
        echo 'checked';
}

function redirect($location){
    header("Location: $location");
    exit();
}
// Trims array values except for keys within the exclude array parameter
function trimArray(&$array, $exclude = []){
    foreach($array as $key => &$value){
        if(is_string($value) && !in_array($key, $exclude))
            $value = trim($value);
    }
}

// ______________________User_________________________

function isUserLoggedIn() {
    return isset($_SESSION[USER_SESSION_KEY]);
}

function getLoggedInUser() {
    return isUserLoggedIn() ? $_SESSION[USER_SESSION_KEY] : null;
}

// Validation for login form
function loginUser($form){
    $errors = [];

    $key = 'email';
    if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_EMAIL) === false)
        $errors[$key] = 'Email is a required field';

    $key = 'password';
    if(!isset($form[$key]) || (strlen($form[$key]) < 8 && preg_match('/^[A-Z][a-z-_]+[0-9]+$/', $form[$key]) === 1) )
        $errors[$key] = 'Password is a required field';

    if(count($errors) === 0){
        $user = getUser($form['email']);

        if($user !== false && $form['password'] === $user['password'])
            // Set session variable to login user. 
            // This will show users name on the nap bar upon login
            $_SESSION[USER_SESSION_KEY] = $user;
        else
            $errors[$key] = 'Invalid email or password. Try again.';
    }

    return $errors;
}

function logoutUser() {
    // Unset all session variables.
    session_unset();
}

function registerUser(&$form){
    // Trim array values.
    trimArray($form, ['password', 'confirmPassword']);
    
    $errors = [];

    $key = 'firstname';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)
        $errors[$key] = 'First name is a required field';

    $key = 'lastname';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)
        $errors[$key] = 'Last name is a required field';

    $key = 'email';
    if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_EMAIL) === false)
        $errors[$key] = 'Email is invalid';
    else if(getUser($form[$key]) !== false)
        $errors[$key] = 'Email is already registered';

    $key = 'confirmemail';
    if(isset($form['email']) && (!isset($form[$key]) || $form['email'] !== $form[$key]))
        $errors[$key] = 'Emails do not match';

    $key = 'phoneno';
    if(!isset($form[$key]) || preg_match('/^\+61 4\d{2} \d{3} \d{3}$/', $form[$key]) !== 1)
        $errors[$key] = 'Invalid phone no. It must be in the correct format: +61 4xx xxx xxx';

    $key = 'age';
    if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_INT,
        ['options' => ['min_range' => 16, 'max_range' => 90]]) === false)
        $errors[$key] = 'Minimum age has to be 16';

    $key = 'studentstatus';
    if(!isset($form[$key]) || preg_match('/^true|false$/', $form[$key]) !== 1)
        $errors[$key] = 'Must select student status.';

    $key = 'employmentstatus';
    if(!isset($form[$key]) || preg_match('/^true|false$/', $form[$key]) !== 1)
        $errors[$key] = 'Must select employment status.';

    $key = 'password';
    if(!isset($form[$key]) || (strlen($form[$key]) < 8 && preg_match('/^[A-Z][a-z-_]+[0-9]+$/', $form[$key]) === 1) )
        $errors[$key] = 'Password must be at least 8 characters long. <br/>
                        Must start with a capital letter
                        Must end with a number';
    
    $key = 'confirmPassword';
    if(isset($form['password']) && (!isset($form[$key]) || $form['password'] !== $form[$key]))
        $errors[$key] = 'Passwords do not match.';

    // Data sanitisation so that people cant input any dodgy code
    // trim function throws anything dodgy
    // And htmlspecialchars converts any dodgy code to literal string charecters
    if(count($errors) === 0){
        // Adding user after checking and removing anything bad
        $user = [
            'firstname' => htmlspecialchars($form['firstname']),
            'lastname' => htmlspecialchars($form['lastname']),
            'email' => $form['email'],
            'phoneno' => htmlspecialchars($form['phoneno']),
            'age' => filter_var($form['age'], FILTER_VALIDATE_INT),
            'student_status' => (int) filter_var($form['studentstatus'], FILTER_VALIDATE_BOOLEAN),
            'employment_status' => (int) filter_var($form['employmentstatus'], FILTER_VALIDATE_BOOLEAN),
            'password' => $form['password']
        ];

        // Inserting user after verifying that the code is safe
        insertUser($user);

        // After registering user is being automatically logged in.
        loginUser([
            'email' => $user['email'],
            'password' => $form['password']
        ]);
    }

    return $errors;
}

// __________Services____________________

function recordActivity($email, $serviceID, $form) {
    $errors = [];

    $key = 'duration';
    if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_INT,
        ['options' => ['min_range' => 1, 'max_range' => 480]]) === false)
        $errors[$key] = 'Duration must be a whole number and not be less than 1 or greater than 480.';
    
    if(count($errors) === 0) {
        // Prepare activity data.
        $activity = [
            'email' => $email,
            'service_id' => $serviceID,
            'service_type' => $form['type'],
            'duration_minutes' => filter_var($form['duration'], FILTER_VALIDATE_INT)
        ];

        // This function will insert the data related to duration into the database
        insertActivity($activity);
    }

    return $errors;
}
