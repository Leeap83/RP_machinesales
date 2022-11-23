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
            <h1>Edit Products</h1>
            <?php 
            if (isset($_SESSION['userId'])) {
                if ($row['superuser'] === '1') {?>
                    <?php include('messages.php'); ?>
                    <div class="back_btn">
                        <a href="admin.php" class="btn btn_bk">Back</a>
                    </div>
                    <?php
                    $sql = "SELECT * FROM products ORDER BY in_stock DESC";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result); ?>                    
                    
                    <div class="products">
                        <div class="contain table_contain">
                            <table>
                                <tr>
                                    <th>Product Name</th>
                                    <th class="mob">Brand</th>
                                    <th class="mob">Category</th>
                                    <th class="mob">Price</th>
                                    <th>In Stock</th>
                                    <th colspan="2" class="ta_center">Actions</th>
                                </tr>
                                <?php if ($resultCheck > 0) {    
                                    while ($row = mysqli_fetch_assoc($result)) {?>
                                        
                                        <tr>
                                            <td><?= $row['product_name'] ?></td>
                                            <td class="mob"><?= $row['product_brand'] ?></td>
                                            <td class="mob"><?= $row['category'] ?></td>
                                            <td class="mob">£<?= number_format($row['price']) ?></td>
                                            <?php if ($row['in_stock'] != '1') {
                                                echo '<td>No</td>';
                                            } elseif ($row['in_stock'] == '2') {
                                                echo '<td>Coming Soon</td>';
                                            } else {
                                                echo '<td>Yes</td>';
                                            } 
                                            ?>
                                            <td><a class="btn edit_btn" href="edit-product-details.php?id=<?= $row['id'] ?>">Edit</a></td>
                                            <td><a class="btn del_btn" href="delete.php?id=<?= $row['id'] ?>" >Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    echo '<p>No Products</p>';
                                }?>
                            </table>
                        </div>
                    </div>

                <?php    
                } else {?>
                
                    <h1>Edit ProductS</h1>
                    <div class="admin_grid">
                        <p>You do not have access to this page</p>
                        <div class="admin_options">
                            <a href="index.php" class="btn">Home</a>
                        </div>
                    </div>                        
                <?php
                }
                
            } else {?>
                   
                <h1>You are not logged in!</h1>
                <div class="admin_grid">
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="username/email">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="login-submit">Login</button>
                    </form>
                </div>                    
            <?php
            }
            ?>          
        </div>    
    </div>
</main> 

<?php include('templates/footer.php') ?>
