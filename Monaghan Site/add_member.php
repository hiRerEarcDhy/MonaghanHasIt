<?php
//Get the product data
$email = filter_input(INPUT_POST, 'email');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
//Validate inputs
if ($email == null || $username == null || $password == null || $password == false) 
    {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} 
else 
{
    require_once('database.php');

    // Add the product to the database 
    $query = "INSERT INTO members (clientEmail, clientUsername, clientPassword) 
        VALUES
               (:email, :username, :password)";
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();

//    // Display the Product List page
    include('display_members.php');
}
?>