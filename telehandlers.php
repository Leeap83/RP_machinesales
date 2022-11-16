<?php 
include('templates/header.php'); 
include('includes/dbh.inc.php');

// $sql = "SELECT * FROM products WHERE category = 'telehandlers'";
// $result = mysqli_query($conn, $sql);
// $resultCheck = mysqli_num_rows($result); 
?>

<main>
    <div class="wrapper-main">
        <div class="product-section">
            <h1>Telehandlers</h1> 
            <form action="products.php" method="POST" class="search-form">            
                <input type="text"  class="search-field" name="search" placeholder="Search here...">
                <div class="search_box">
                    <input type="submit" class="btn back_btn submit">
                    <input type="submit" class="btn back_btn reset" value="All Products">
                </div>
            </form>
            <div class="filters">
                <span class="categories">
                    <strong>Catergory:</strong>
                    <a href="tractors.php">Tractors</a> |
                    <a href="telehandlers.php">Telehandlers</a> |
                    <a href="machinery.php">Used Machinery</a>
                </span>                
                <span class="price-filter">
                    <p><strong>Price:</strong>
                        <a href="telehandlers.php?sortby=pricelohi">Ascending</a> |
                        <a href="telehandlers.php?sortby=pricehilo">Descending</a>
                    </p>
                </span>          
            </div>
            <div class="product_grid">
                <?php 
                if (isset($_POST['search'])){
                    $search = $_POST['search'];
                    $sql = "SELECT * FROM products WHERE product_name like '%$search%' or product_brand like '%$search%' or category like '%$search%'";
                                
                } else {
                    $sql = "SELECT * FROM products WHERE category = 'telehandlers'";
                }

                if (isset($_GET['sortby'])) {
                    $sortby = $_GET['sortby'];
                    if ($sortby == 'pricehilo') {
                        $sql = "SELECT * FROM products WHERE category = 'telehandlers' ORDER BY price DESC";
                    } elseif ($sortby = 'pricelohi') {
                        $sql = "SELECT * FROM products WHERE category = 'telehandlers' ORDER BY price ASC";
                    } 
                } else {
                    $sql = "SELECT * FROM products ORDER BY in_stock DESC";
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
                                        <div class="img_container_cs">
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
                                        <p><small>Year: <?= (!empty($row['years']))? $row['years'] : 'n/a';?> | Hours: <?=(!empty($row['hours']))? $row['hours'] : 'n/a';?></small></p>
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