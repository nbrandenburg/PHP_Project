<?php
    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate author object
    $author = new Author($db);

    // Get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    // Set ID to update
    $author->id = $data->id;

    $author->author = $data->author;

    // Update post
    if($author->update()) {
        echo json_encode(array('message' => 'Author Updated'));
    } else {
        echo json_encode(array('message' => 'Author not updated'));
    }
