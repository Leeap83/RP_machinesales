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
                        <a href="tel:01948532055"><img src="images/telephone-call.png" alt="Telephone"></a>
                        <a href="https://wa.me/7792715169" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#F9D342" height="30" width="30"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                        </a>
                    </div>
                    <div class="dealers">
                        <p class="text-white">Proud Dealers of</p>
                        <div>
                            <a href="https://www.jpmtrailers.com/"><img src="https://www.jpmtrailers.com/site/wp-content/themes/websiteni-stripped/images/jpm-logo.png" class="jpm-logo" alt="JPM Trailers"></a>
                            <a href="https://www.harrywest.co.uk/">
                                <svg version="1.1" id="Layer_1" class="west-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 466.65 148.57" style="enable-background:new 0 0 466.65 148.57;" xml:space="preserve">
                                    <g>
                                        <polygon class="st0" points="0,24.45 42.5,24.45 79.43,104 56.35,148.57 	"></polygon>
                                        <polygon class="st0" points="57.58,24.45 100.07,24.45 137.01,104 115.3,148.57 	"></polygon>
                                        <polygon class="st1" points="116.01,24.45 144.91,24.45 160.49,57.74 169.25,43.55 161.02,24.45 189.39,24.45 204.8,57.74
                                                                            213.55,41.1 203.05,24.45 249.98,24.45 212.68,99.42 193.94,99.42 181.33,74.02 168.72,99.42 149.11,99.42 	"></polygon>
                                        <path class="st1" d="M288.21,81.62c-18.64,0-17.21-15.75-17.21-15.75s35.4,0,61,0c0-38.48-21.9-45.02-46.17-45.02
                                                                            c-35.09,0-46.14,23.93-46.14,41.09c0,25.52,21.9,39.96,48.7,39.96c39.52,0,43.61-28.26,43.61-28.26h-29.69
                                                                            C301.92,75.92,298.43,81.62,288.21,81.62z M287.92,39.73c12.23,0,15.62,10.01,15.62,10.01H272.3
                                                                            C272.3,49.74,275.69,39.73,287.92,39.73z"></path>
                                        <path class="st1" d="M392.3,43.73l8.21-18.78c0,0-12.78-5.37-27.3-5.37c-14.52,0-37.56,8.21-37.56,28.72
                                                                            c0,25.25,36.77,18.47,36.77,27.3s-16.57,5.1-32.51-3.05c-5.05,9.21-9.47,20.26-9.47,20.26s13.89,9.09,35.04,9.09
                                                                            c21.15,0,38.35-11.72,38.35-29.34c0-16.76-15.31-21.25-23.04-22.36c-7.73-1.1-13.65-3.47-13.65-6.63
                                                                            C367.13,40.41,371.31,35.05,392.3,43.73z"></path>
                                        <polygon class="st1" points="466.65,23.93 466.65,45.28 445.8,45.28 445.8,100.71 416.91,100.71 416.91,45.28 403.83,45.28
                                                                            403.83,23.93 416.91,23.93 416.91,0 445.8,0 445.8,23.93 	"></polygon>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>                                  
                </div> 
                                  
            </div>
        </div>
    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>    