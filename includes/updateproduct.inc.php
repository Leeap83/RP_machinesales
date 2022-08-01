<?php
    session_start();
    if (isset($_POST['update-product'])) {

        require 'dbh.inc.php';

        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $name = mysqli_real_escape_string($conn, $_POST['product_name']);
        $brand = mysqli_real_escape_string($conn, $_POST['product_brand']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $hours = mysqli_real_escape_string($conn, $_POST['hours']);
        $years = mysqli_real_escape_string($conn, $_POST['years']);
        $mainImg = mysqli_real_escape_string($conn, $_POST['main_imgage']);
        $imgOne = mysqli_real_escape_string($conn, $_POST['image_one']);
        $imgTwo = mysqli_real_escape_string($conn, $_POST['image_two']);
        $imgThree = mysqli_real_escape_string($conn, $_POST['image_three']);
        $imgFour = mysqli_real_escape_string($conn, $_POST['image_four']);
        $imgFive = mysqli_real_escape_string($conn, $_POST['image_five']);
        $imgSix = mysqli_real_escape_string($conn, $_POST['image_six']);
        $video = mysqli_real_escape_string($conn, $_POST['video']);
        $status = mysqli_real_escape_string($conn, $_POST['in_stock']);
        
        $sql = "UPDATE `products` SET `product_name`='$name', `product_brand`='$brand', `category`='$category', `description`='$description', `price`='$price', `hours`='$hours', `years`='$years', `main_image`='$mainImg', `image_one`='$imgOne', `image_two`='$imgTwo', `image_three`='$imgThree', `image_four`='$imgFour', `image_five`='$imgFive', `image_six`='$imgSix', `video`='$video', `in_stock`='$status' WHERE id=$id";              
        
        $sql_run = mysqli_query($conn, $sql);
        
        if ($sql_run) {
            $_SESSION['message'] = "Product Updated Successfully";
            header("location: ../edit-product.php");
            exit(0);

        } else {
            $_SESSION['message'] = "Product Not Updated Successfully";
            header("location: ../edit-product.php");
            exit(0);
        }   
    }

    
