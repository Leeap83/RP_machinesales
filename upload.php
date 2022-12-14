<?php include('templates/header.php'); 
 include_once 'includes/upload.inc.php';

 if (isset($_SESSION['userId'])) {?>

    <main>
        <div class="wrapper-main"> 
            <?php
            if (!empty($statusMsg)) { ?>
                <div class="alert alert-<?php echo $status;?>"><?php echo $statusMsg; ?></div>
            <?php }?>
            <div class="form_section">
                <h1>Upload Images to Imugular</h1>
                <div class="back_btn">
                    <a href="admin.php" class="btn btn_bk">Back</a>
                </div>
                <div class="form">
                    <form method="post" action="" enctype="multipart/form-data">
                        <label for="image" style="color:#fff;">Image</label>
                        <input type="file" name="image">
                        <label for="title" style="color:#fff;">Title</label>
                        <input type="text" name="title">
                        <label for="description" style="color:#fff;">Description</label>
                        <input type="text" name="description">
                        <input type="submit" name="submit" value="upload">
                    </form>
                </div>
            </div>
            <?php 
                if (!empty($imgurData)) { ?>
                    <div class="card">
                        <img src="<?php echo $imgurData->data->link; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $imgurData->data->title; ?></h2>
                            <p class="card-text"><?php echo $imgurData->data->description; ?></p>
                            <p><b>Imgur url:</b> <a href="<?php echo $imgurData->data->link; ?>" target="_blank"><?php echo $imgurData->data->link; ?></a></p>
                        </div>
                    </div>
                <?php }
            ?>
        </div>
    </main>
    <?php
 }else {
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
    }?>
    
<?php include('templates/footer.php') ?>