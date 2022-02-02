<!-- Codes in this file are understood and written from Week9 lab activity 3 of Web programming COSC2413 -->
<!-- Some codes in this file are understood and implemented from Week10 lecture activity 6 of Web programming COSC2413 -->

<?php

// Connecting database file with this page
const SERVER_NAME = 'rmit.australiaeast.cloudapp.azure.com';
const DB_NAME = 's3796107_a2';
const USERNAME = DB_NAME;
const PASSWORD = 'Web3796107Prog';

const DSN = 'mysql:host=' . SERVER_NAME . ';dbname=' . DB_NAME;

function createConnection(){
    return new PDO(DSN, USERNAME, PASSWORD);
}

function prepareAndExecute($query, $params = null) {
    $pdo = createConnection();
    $statement = $pdo->prepare($query);
    $statement->execute($params);

    return $statement;
}

function prepareExecuteAndFetchAll($query, $params = null){
    $statement = prepareAndExecute($query, $params);

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function prepareExecuteAndFetch($query, $params = null){
    $statement = prepareAndExecute($query, $params);

    return $statement->fetch(PDO::FETCH_ASSOC);
}

// _______________________Users________________
//  this function is getting all the users from the user table
function getUsers(){
    // this will return the result of the sql query
    return prepareExecuteAndFetchAll('select * from user');
}

//  This function gets the email from the database to match it while user logins
function getUser($email){
    return prepareExecuteAndFetch('select * from user where email = :email', ['email' => $email]);
}

function insertUser($user) {
    // Inserting into user table and return the value
    return prepareAndExecute(
        'insert into user
        (email, password, first_name, last_name, phone, age, is_student, is_employed) values
        (:email, :password, :firstname, :lastname, :phoneno, :age, :student_status, :employment_status)', $user);

}

// ______________________Services_____________________

// This code block is to gett all the services present in the service table
function getServices(){
    return prepareExecuteAndFetchAll('select * from service');
}

// Code below is for getting a specific service indentified by it's id
function getService($id){
    return prepareExecuteAndFetch('select * from service where service_id = :id', ['id' => $id]);
}

// The code block below is for getting all the services instructions which contains the types of particular services
function getServiceInstructions($id){
    return prepareExecuteAndFetchAll('select * from service_instruction where service_id = :id', ['id' => $id]);
}

// This function is for getting the each service type that matches based on id and service type
function getServiceInstruction($id, $type){
    return prepareExecuteAndFetch(
        'select * from service_instruction where service_id = :id and service_type = :type',
        ['id' => $id, 'type'=>$type]);
}

// This function is for inserting data into the user_service table to record
function insertActivity($activity) {
    return prepareAndExecute(
        'insert into user_service
        (email, service_id, service_type, date_performed, duration_minutes) values
        (:email, :service_id, :service_type, now(), :duration_minutes)', $activity);
}

// ______________________meal______________________________
// function getMealID($id){
//     return prepareExecuteAndFetch('select * from meal where meal_id = :id', ['id' => $id]);
// }


// The code block below is for getting all the meals which matches particular id
// function getMeals($type){
//     return prepareExecuteAndFetchAll('select * from meal where type = :type', ['type' => $type]);
// }

function getMeals($id){
    return prepareExecuteAndFetchAll('select * from meal where meal_id = :id', ['id' => $id]);
}

// This function is for getting the each meal type that matches based on id and meal type
function getMeal($meal_id, $type){
    return prepareExecuteAndFetch(
        'select * from meal where meal_id = :id and type = :type',
        ['id' => $id, 'type'=>$type]);
}

//_____________function for doing search___________
function getSearchedService($name = null){
    // if search bar empty then it will return all the users
    if(empty($name))
        return prepareExecuteAndFetchAll('select * from service');

    //  This bit is doing all the search 
    return prepareExecuteAndFetchAll(
        'select * from service where name like concat(\'%\', :name, \'%\')', 
        ['name' => $name]);
}