<?php
require_once('database.php');

// Get IDs
$member_id = filter_input(INPUT_POST, 'member_id', FILTER_VALIDATE_INT);

// Delete the product from the database

    $query = "DELETE FROM members
              WHERE memberID = :member_id";
    
    $statement = $db->prepare($query);
    $statement->bindValue(':member_id', $member_id);
    $statement->execute();
    $statement->closeCursor();


// display the Product List page
include('display_members.php');
?>