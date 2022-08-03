<?php 
include('templates/header.php'); 
include('includes/dbh.inc.php');

// $data = '1';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

?>
<main>
    <div class="wrapper-main"> 
        <div class="form_section">
            <?php 
                if (isset($_SESSION['userId'])) {
                    if ($row['superuser'] === '1') {
                        if (isset($_GET['id'])){

                            $id = mysqli_real_escape_string($conn, $_GET['id']);
                            $sql_details = "SELECT * FROM products WHERE id=$id";
                            $results1=mysqli_query($conn, $sql_details);
                            
                            if (mysqli_num_rows($results1) > 0) {
                                $products = mysqli_fetch_assoc($results1);?>

                                <h1>Update Product</h1>
                                
                                <div class="back_btn">
                                    <a href="admin.php" class="btn btn_bk">Back</a>
                                </div>
                                <div class="form update-form">
                                    <form action="includes/updateproduct.inc.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $id?>">
                                        <div>
                                            <label>Product Name</label>
                                            <input type="text" name="product_name" placeholder="Product Name" value="<?= $products['product_name']; ?>">                                    
                                        </div>
                                        <div>
                                            <label>Brand</label>
                                            <input type="text" name="product_brand" placeholder="Product Brand" value="<?= $products['product_brand']; ?>">                                    
                                        </div>
                                        <div>    
                                            <label>Category</label>
                                            <select name="category">
                                                <option value="<?= $products['category']; ?>"><?= $products['category']; ?></option>
                                                <option value="Tractors">Tractors</option>
                                                <option value="Telehandlers">Telehandlers</option>
                                                <option value="Machinery">Machinery</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label>In Stock</label>
                                            <select name="in_stock">
                                                <option value="<?= $products['in_stock']; ?>"><?= $products['in_stock']; ?></option>
                                                <option value="1">Yes</option>
                                                <option value="0">Sold</option>
                                                <option value="2">Coming Soon</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label>Description</label>
                                            <input type="textarea" name="description" placeholder="Description" value="<?= $products['description']; ?>">
                                        </div>
                                        <div>  
                                            <label>Price</label>
                                            <input type="text" name="price" placeholder="Price" value="<?= $products['price']; ?>">
                                        </div>
                                        <div>
                                            <label>Hours</label>
                                            <input type="text" name="hours" placeholder="Hours" value="<?= $products['hours']; ?>">
                                        </div>
                                        <div>  
                                            <label>Years</label>
                                            <input type="text" name="years" placeholder="Year" value="<?= $products['years']; ?>">
                                        </div>
                                        <div>
                                            <label>Main Image</label>
                                            <input type="text" name="main_imgage" placeholder="main image" value="<?= $products['main_image']; ?>">
                                        </div>
                                        <div>    
                                            <label>Image One</label>
                                            <input type="text" name="image_one" placeholder="image 1" value="<?= $products['image_one']; ?>">
                                        </div>
                                        <div>
                                            <label>Image Two</label>
                                            <input type="text" name="image_two" placeholder="image 2" value="<?= $products['image_two']; ?>">
                                        </div>
                                        <div>    
                                            <label>Image Three</label>
                                            <input type="text" name="image_three" placeholder="image 3" value="<?= $products['image_three']; ?>">
                                        </div>
                                        <div>
                                            <label>Image Four</label>
                                            <input type="text" name="image_four" placeholder="image 4" value="<?= $products['image_four']; ?>">
                                        </div>
                                        <div>    
                                            <label>Image Five</label>
                                            <input type="text" name="image_five" placeholder="image 5" value="<?= $products['image_five']; ?>">
                                        </div>
                                        <div>    
                                            <label>Image Six</label>
                                            <input type="text" name="image_six" placeholder="image 6" value="<?= $products['image_six']; ?>">
                                        </div>
                                        <div>    
                                            <label>Video</label>
                                            <input type="text" name="video" placeholder="video" value="<?= $products['video']; ?>">
                                        </div>
                                        <button type="submit" name="update-product">Update Product</button>
                                    </form>
                                </div>
                            
                                <?php
                            } else {
                                echo '<h4>No Product found</h4>';
                            }
                        } 
                    } else {
                        echo '
                        <h1>Add Product</h1>
                        <div class="admin_grid">
                            <p>You do not have access to this page</p>
                            <div class="admin_options">
                                <a href="index.php" class="btn">Home</a>
                            </div>
                        </div>';
                    }
                } else {
                    echo '      
                    <h1>You are not logged in!</h1>
                    <div class="admin_grid">
                        <form action="includes/login.inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="username/email">
                            <input type="password" name="pwd" placeholder="Password">
                            <button type="submit" name="login-submit">Login</button>
                        </form>
                    </div>';
                }
            ?>

            
            
        </div>    
    </div>
</main> 

<?php include('templates/footer.php') ?>