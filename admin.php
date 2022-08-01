<?php 
include('templates/header.php'); 
include('includes/dbh.inc.php');

?>
<main>
    <div class="wrapper-main"> 
        <div class="form_section">
            <?php 
                if (isset($_SESSION['userId'])) {
                    echo '
                        <h1>Admin Panel</h1>
                        <div class="admin_grid">
                            <div class="admin_options">
                                <a href="add-product.php" class="btn">Add Product</a>
                                <a href="edit-product.php" class="btn">Edit Product</a>
                            </div>    
                        </div>
                        
                        
                        <form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                        </form>
                    ';
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