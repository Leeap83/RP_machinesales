<?php include('templates/header.php'); 
 include_once 'includes/upload.inc.php';
?>

<main>
    <div class="wrapper-main"> 
        <?php
        if (!empty($statusMsg)) { ?>
            <div class="alert alert-<?php echo $status;?>"><?php echo $statusMsg; ?></div>
        <?php }?>
        <div class="form_section">
            <form method="post" action="" enctype="multipart/form-data">
                <label for="">Image</label>
                <input type="file" name="image">
                <label for="">Title</label>
                <input type="text" name="title">
                <label for="">Description</label>
                <input type="text" name="description">
                <input type="submit" name="submit" value="upload">
            </form>
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
<?php include('templates/footer.php') ?>