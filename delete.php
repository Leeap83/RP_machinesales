<?php
    include('templates/header.php'); 
    include('includes/dbh.inc.php');

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if (isset($_SESSION['userId'])) {
        if ($row['superuser'] === '1') {
            if (isset($_GET['id'])) {

                $id = mysqli_real_escape_string($conn, $_GET['id']);

                $sql="DELETE FROM products WHERE id=$id";
                $result=mysqli_query($conn, $sql);
                
                if ($result) {
                    $_SESSION['message'] = "Product Deleted Successfully";
                    header('Location:edit-product.php');
                    exit(0);

                } else {
                    $_SESSION['message'] = "Product Not Deleted";
                    header('Location:edit-product.php');
                    exit(0);
                }
            } 
            
        } else {?>   
            <h1>Delete Products</h1>
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
<?php include('templates/footer.php') ?>