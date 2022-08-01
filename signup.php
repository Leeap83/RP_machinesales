<?php 
include('templates/header.php'); 
?>
<main>
    <div class="wrapper-main">
        <section class="form_section">
            <h1>Signup</h1>
            <div class="form">
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="username">
                    <input type="text" name="mail" placeholder="Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                    <button type="submit" name="signup-submit">Signup</button>
                </form>
            </div>
            
        </section>    
    </div>
</main> 
<?php include('templates/footer.php') ?>