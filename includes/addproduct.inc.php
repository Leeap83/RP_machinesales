<?php
    session_start();
    if (isset($_POST['add-product'])) {

        require 'dbh.inc.php';

        $name = $_POST['product_name'];
        $brand = $_POST['product_brand'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $hours = $_POST['hours'];
        $years = $_POST['years'];
        $mainImg = $_POST['main_imgage'];
        $imgOne = $_POST['image_one'];
        $imgTwo = $_POST['image_two'];
        $imgThree = $_POST['image_three'];
        $imgFour = $_POST['image_four'];
        $imgFive = $_POST['image_five'];
        $imgSix = $_POST['image_six'];
        $video = $_POST['video'];
        
        $sql = "INSERT INTO `products` (`product_name`, `product_brand`, `category`, `description`, `price`, `hours`, `years`, `main_image`, `image_one`, `image_two`, `image_three`, `image_four`, `image_five`, `image_six`, `video`) 
                VALUES ('$name', '$brand', '$category','$description','$price','$hours','$years','$mainImg','$imgOne','$imgTwo','$imgThree','$imgFour','$imgFive','$imgSix','$video')
        ";              
    
        mysqli_query($conn, $sql);
          
        $_SESSION['message'] = "Product Added Successfully";
        header("location: ../edit-product.php");
        exit(0);

    } else {
        $_SESSION['message'] = "Product Not Added";
        header("location: ../edit-product.php");
        exit(0);
    }

    
