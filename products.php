<?php 
include('templates/header.php'); 
include('includes/dbh.inc.php');
?>

<main>
    <div class="wrapper-main">
        <div class="product-section">
            <h1>All Products</h1>  

                <div class="product_grid">
                    <?php
                    $sql = "SELECT * FROM products";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if ($resultCheck > 0) {    
                        while ($row = mysqli_fetch_assoc($result)) {?>
                            <a href="product-details.php?id=<?= $row['id'] ?>">
                                <div class="product_item card">
                                    <?php
                                    if ($row['in_stock'] != '1') {?>                                
                                        <div class="img_container">
                                            <span>SOLD</span> 
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
                        echo '<p>No Products</p>';
                    }?>
                </div>
        </div>
    </div>
</main>
<?php include('templates/footer.php') ?>