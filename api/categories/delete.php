<?php
    //require_once '../../config/Database.php';
    require_once '../../config/DatabaseLocal.php';
    require_once '../../models/Category.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate category object
    $category = new Category($db);

    // Set ID to delete
    $category->id = $data->id;

    // Delete post
    if($category->delete()) {
        echo json_encode(array('message' => 'Category deleted'));
    } else {
        echo json_encode(array('message' => 'Category not deleted'));
    }