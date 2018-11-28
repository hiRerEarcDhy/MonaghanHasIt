<?php
// Get the product data
$member_id = filter_input(INPUT_POST, 'member_id', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

// Validate inputs
if (empty($email) || empty($username) || empty($password)) 
{
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} 
else 
{
    // If valid, update the product in the database
    require_once('database.php');
    $query = 'UPDATE members
              SET 
                  clientEmail = :email,
                  clientUsername = :username,
                  clientPassword = :password
               WHERE memberID = :member_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':member_id', $member_id);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
        include('display_members.php');
}
?>