<?php
require_once('database.php');

// Get IDs
$attraction_id = filter_input(INPUT_POST, 'attraction_id', FILTER_VALIDATE_INT);

// Delete the attraction from the database
if ($attraction_id != false) {
    $query = 'DELETE FROM attractions
              WHERE attraction_id = :attraction_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':attraction_id', $attraction_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Attractions List page
include('index.php');