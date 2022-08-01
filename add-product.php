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
                        echo '
                        <h1>Add Product</h1>
                        <div class="back_btn">
                            <a href="admin.php" class="btn btn_bk">Back</a>
                        </div>
                        <div class="form">
                            <form action="includes/addproduct.inc.php" method="post">
                                <input type="text" name="product_name" placeholder="Product Name">                                    
                                <input type="text" name="product_brand" placeholder="Product Brand">                                    
                                <select name="category">
                                    <option value="" disabled selected hidden>Choose a category</option>
                                    <option value="tractors">Tractors</option>
                                    <option value="telehandlers">Telehandlers</option>
                                    <option value="machinery">Machinery</option>
                                </select>
                                <input type="text" name="description" placeholder="Description">
                                <input type="text" name="price" placeholder="Price">
                                <input type="text" name="hours" placeholder="Hours">
                                <input type="text" name="years" placeholder="Year">
                                <input type="text" name="main_imgage" placeholder="main image">
                                <input type="text" name="image_one" placeholder="image 1">
                                <input type="text" name="image_two" placeholder="image 2">
                                <input type="text" name="image_three" placeholder="image 3">
                                <input type="text" name="image_four" placeholder="image 4">
                                <input type="text" name="image_five" placeholder="image 5">
                                <input type="text" name="image_six" placeholder="image 6">
                                <input type="text" name="video" placeholder="video">
                            
                                <button type="submit" name="add-product">Add Product</button>
                            </form>
                        </div>
                        
                        ';
                    } else {
                        echo '
                        <h1>Add Product</h1>
                        <div class="admin_grid">
                            <p>You do not have access to this page</p>
                            <div class="admin_options">
                                <a href="index.php" class="btn">Home</a>
                            </div>
                        </div>                        
                    ';
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
                    </div>                    
                    ';
                }
            ?>

            
            
        </div>    
    </div>
</main> 

<?php include('templates/footer.php') ?>