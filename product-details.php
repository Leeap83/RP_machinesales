<?php 
include('templates/header.php'); 
include('includes/dbh.inc.php');
?>

<?php 
if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM products WHERE id = $id";

    $result = mysqli_query($conn, $sql);
    $result_check = mysqli_fetch_assoc($result);

    // mysqli_free_result($result);
    // mysqli_close($conn);


}
?>

<main>
    <?php if ($result_check > 0) {?>
    <div class="wrapper-main">
        <div class="product-section product_details_section">
            <div class="product_details contain">
                <div class="product_content">
                    <h1><?= $result_check['product_name']?></h1>
                    <p><strong>Brand</strong>: <?= $result_check['product_brand']?></p>
                    <p><strong>Category</strong>: <?= $result_check['category']?></p>
                    <p><strong>Description</strong>:</p>
                    <textarea><?= $result_check['description']?></textarea>
                    <p><strong>Price</strong>: £<?= number_format($result_check['price']) ?></p>
                    <p><strong>Hours</strong>: <?= number_format($result_check['hours']) ?></p>
                    <p><strong>Year</strong>: <?= $result_check['years']?></p>
                    <?php if ($result_check['in_stock'] === '1') {
                        echo '<p><strong style="color:green;">In stock</strong></p>';
                    } else {
                        echo '<p><strong>Sold</strong></p>';
                    }?>
                    <div class="cont_btn">
                        <a href="contact.php" class="btn contact_btn">Contact Us</a>
                    </div>
                </div>
                <div class="product_image">
                    <?php if ($result_check['video']) {?>
                    <h3>Product Video</h3>
                    <div class="video">
                        <iframe width="100%" height="315" src="<?= $result_check['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <?php 
                    }?>
                    <h3>Product Images</h3>            
                    <div class="image_container">
                        <div class="column">
                            <?php if ($result_check['main_image']){?>
                                <img src="<?= $result_check['main_image']; ?>" width="180" height="180" alt="<?= $result_check['product_name'];?>" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                            <?php
                            }?>
                        </div>
                        <div class="column">
                            <?php if ($result_check['image_one']){?>
                                <img src="<?= $result_check['image_one']; ?>" width="180" height="180" alt="<?= $result_check['product_name'];?>" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                            <?php
                            }?>
                        </div>
                        <div class="column">
                            <?php if ($result_check['image_two']){?>
                                <img src="<?= $result_check['image_two']; ?>" width="180" height="180" alt="<?= $result_check['product_name'];?>" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                            <?php
                            }?>
                        </div>
                        <div class="column">
                            <?php if ($result_check['image_three']){?>
                                <img src="<?= $result_check['image_three']; ?>" width="180" height="180" alt="<?= $result_check['product_name'];?>" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                            <?php
                            }?>
                        </div>
                        <div class="column">
                            <?php if ($result_check['image_four']){?>
                                <img src="<?= $result_check['image_four']; ?>" width="180" height="180" alt="<?= $result_check['product_name'];?>" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                            <?php
                            }?>
                        </div>
                        <div class="column">
                            <?php if ($result_check['image_five']){?>
                                <img src="<?= $result_check['image_five']; ?>" width="180" height="180" alt="<?= $result_check['product_name'];?>" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                            <?php
                            }?>
                        </div>
                        <div class="column">
                            <?php if ($result_check['image_six']){?>
                                <img src="<?= $result_check['image_six']; ?>" width="180" height="180" alt="<?= $result_check['product_name'];?>" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                            <?php
                            }?>  
                        </div>
                        <div class="column">
                            <?php if ($result_check['image_seven']){?>
                                <img src="<?= $result_check['image_seven']; ?>" width="180" height="180" alt="<?= $result_check['product_name'];?>" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                            <?php
                            }?>
                        </div>
                    </div>
                    <div id="myModal" class="modal">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <div class="modal-content">
                            <?php if ($result_check['main_image']){?>
                                <div class="mySlides">
                                    <div class="numbertext">1 / 8</div>
                                    <img src="<?= $result_check['main_image']; ?>" height="600px">
                                </div>
                            <?php
                            }?>

                            <?php if ($result_check['image_one']){?>
                                <div class="mySlides">
                                    <div class="numbertext">2 / 8</div>    
                                    <img src="<?= $result_check['image_one']; ?>" height="600px">                                
                                </div>
                            <?php
                            }?>

                            <?php if ($result_check['image_two']){?>
                                <div class="mySlides">
                                    <div class="numbertext">3 / 8</div>
                                    <img src="<?= $result_check['image_two']; ?>" height="600px">
                                </div>
                            <?php
                            }?>

                            <?php if ($result_check['image_three']){?>
                                <div class="mySlides">
                                    <div class="numbertext">4 / 8</div>
                                    <img src="<?= $result_check['image_three']; ?>" height="600px">
                                </div>
                            <?php
                                }?>

                            <?php if ($result_check['image_four']){?>
                                <div class="mySlides">
                                    <div class="numbertext">5 / 8</div>
                                    <img src="<?= $result_check['image_four']; ?>" height="600px">
                                </div>
                            <?php
                            }?>

                            
                            <?php if ($result_check['image_five']){?>
                                <div class="mySlides">
                                    <div class="numbertext">6 / 8</div>
                                    <img src="<?= $result_check['image_five']; ?>" height="600px">
                                </div>
                            <?php
                            }?>

                            <?php if ($result_check['image_five']){?>    
                                <div class="mySlides">
                                    <div class="numbertext">7 / 8</div>
                                    <img src="<?= $result_check['image_six']; ?>" height="600px">    
                                </div>
                            <?php
                            }?>

                            <?php if ($result_check['image_seven']){?>
                                <div class="mySlides">
                                    <div class="numbertext">8 / 8</div>
                                    <img src="<?= $result_check['image_seven']; ?>" height="600px">
                                </div>
                            <?php
                            }?>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            <div class="caption-container">
                            <p id="caption"></p>
                            </div>                            
                        </div>
                    </div>                                               
                </div>
            </div>
        </div>
    </div>
    <?php
    } else {?>
    <div class="wrapper-main">
        <div class="product-section">
            <h1>Used Machinery</h1> 
                <div class="product_grid">
                    <h3>No Product Found</h3>
                </div>
        </div>
    </div>
    <?php
    } 
    ?>
</main>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


<?php include('templates/footer.php') ?>