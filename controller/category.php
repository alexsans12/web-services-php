<?php

    header('Content-Type: application/json');

    require_once("../config/connection.php");
    require_once("../models/Category.php");

    $category = new Category();

    $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"]) {
        case "GetAll":
            $results = $category->getCategory();
            echo json_encode($results);
        break;
        case "GetId":
            $results = $category->getCategoryById($body["cat_id"]);
            echo json_encode($results);
        break;
        case "Insert":
            $category->insertCategory($body["cat_name"], $body["cat_obs"]);
            echo json_encode("Correct");
        break;
        case "Update":
            $category->updateCategory($body["cat_id"], $body["cat_name"], $body["cat_obs"]);
            echo json_encode("Correct");
        break;
        case "Delete":
            $category->deleteCategory($body["cat_id"], $body["cat_name"], $body["cat_obs"]);
            echo json_encode("Correct");
        break;
        Default:
            $results = $category->getCategory();
            echo json_encode($results);
    }