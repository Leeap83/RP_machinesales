<?php 
include('templates/header.php'); 
include('includes/dbh.inc.php');
?>

<main>
    <div class="wrapper-main">
        <div class="product-section">
            <h1>All Products</h1>
            <form action="products.php" method="POST">            
                <input type="text"  class="search-field" name="search" placeholder="Search here...">
                <div class="search_box">
                    <input type="submit" class="btn back_btn submit">
                    <input type="submit" class="btn back_btn reset" value="All Products">
                </div>
            </form>
                <div class="product_grid">
                    <?php
                    if (isset($_POST['search'])){
                        $search = $_POST['search'];
                        $sql = "SELECT * FROM products WHERE product_name like '%$search%' or product_brand like '%$search%' or category like '%$search%'";
                    } else {
                        $sql = "SELECT * FROM products";
                    }
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if ($resultCheck > 0) {    
                        while ($row = mysqli_fetch_assoc($result)) {?>
                            <a href="product-details.php?id=<?= $row['id'] ?>">
                                <div class="product_item card">
                                    <?php
                                    if ($row['in_stock'] == '0') {?>                                
                                        <div class="img_container">
                                            <span>SOLD</span> 
                                            <img src="<?= $row['main_image'] ?>" width="300" height="300" alt="<?= $row['product_name'] ?>">
                                        </div>
                                    <?php
                                    } elseif ($row['in_stock'] == '2') {?>
                                        <div class="img_container">
                                            <span>COMING SOON</span> 
                                            <img src="<?= $row['main_image'] ?>" width="300" height="300" alt="<?= $row['product_name'] ?>">
                                        </div>
                                        <?php
                                    } else {?>
                                        <img src="<?= $row['main_image'] ?>" width="300" height="300" alt="<?= $row['product_name'] ?>">
                                    <?php
                                    }
                                    ?>
                                    <div class="card_container">
                                        <h2><?= $row['product_name'] ?></h2>
                                        <p> £<?= number_format($row['price'])?></p> 
                                    </div>
                                </div>
                            </a>
                            <?php
                        }
                    } else {
                        echo '<p>No Products Found</p>';
                    }?>
                </div>
        </div>
    </div>
</main>
<?php include('templates/footer.php') ?>