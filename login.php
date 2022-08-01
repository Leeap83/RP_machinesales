<?php 
include('templates/header.php'); 
include('includes/dbh.inc.php');

?>
<main>
    <div class="wrapper-main"> 
        <div class="form_section">        
            <h1>Login</h1>
            <div class="admin_grid">
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="username/email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                </form>
            </div>             
        </div>    
    </div>
</main> 

<?php include('templates/footer.php') ?>