<footer class="bg_black">
    <div id="foot_menu">
        <div class="pad">
            <div class="contain">
                <div class="footer-links">
                    <a href="/" class="footer-logo">
                        <img src="/images/logos-05.png" width="130" height="auto" alt="logo">
                    </a> 
                    <div class="foot-grid">
                        <span class="flinks">
                            <a href="tractors.php">Tractors</a> <span class="mob">|</span>
                            <a href="telehandlers.php">Telehandlers</a> <span class="mob">|</span>
                            <a href="machinery.php">Machinery</a> <span class="mob">|</span>
                            <a href="exports.php">Exports</a> <span class="mob">|</span>
                        </span>
                        <span class="flinks">
                            <a href="privacy.php">Privacy Policy</a> <span class="mob">|</span>
                            <a href="terms.php">Terms of Business</a> <span class="mob">|</span>
                            <a href="login.php">Admin</a>
                            <?php
                            if (isset($_SESSION['userId'])) {
                                if ($row['superuser'] === '1') {?>
                                    | <a href="admin.php">Admin Panel</a>
                                    <?php                              
                                }
                            }?>                            
                        </span>
                    </div>
                    <div class="social-links">
                        <a href="https://www.facebook.com/rp.machinery.sales/"><img src="images/facebook.png" alt="Facebook"></a>
                        <a href="mailto:enquiries@rpmachinerysales.co.uk"><img src="images/email.png" alt="Email"></a>
                        <a href="tel:07792715169"><img src="images/telephone-call.png" alt="Telephone"></a>
                    </div>                                  
                </div> 
                                  
            </div>
        </div>
    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>    