<?php include('templates/header.php') ?>
    <div>
        <section class="hero_section">
            <div class="contain">
                <div class="hero-text">
                    <h1>Welcome to RP Machinery Sales</h1>
                    <h2>Excellent range of Used Tractors, Telescopic Handlers and Machinery</h2>
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <div class="pad">
                <div class="contain">
                    <div class="about-grid">
                        <div class="about-item">
                            <img src="images/check-mark.png" width="80" height="80" alt="Reliable">
                            <h2>FRIENDLY & RELIABLE</h2>
                            <p>We are here to help. Our friendly and approachable team are on hand to assist you.</p>
                        </div>
                        <div class="about-item">
                            <img src="images/tick.png" width="80" height="80" alt="Tick">
                            <h2>COMPETITIVELY PRICED</h2>
                            <p>We offer competitive prices on a wide range of well maintained used tractors and agricultural machinery.</p>
                        </div>
                        <div class="about-item">
                            <img src="images/global-shipping.png" width="80" height="80" alt="Global">
                            <h2>INTERNATIONAL</h2>
                            <p>If you require a UK delivery or an international shipment, we can arrange it. </p>
                        </div>
                    </div>
                </div>
            </div>        
        </section>
        <section class="sectors">
            <div class="pad">
                <div class="contain">
                    <div class="sectors-grid">
                        <div class="sector-item tractors-sec">
                            <div class="item-text bg_black">
                                <h2>Tractors</h2>
                            </div>
                        </div>
                        <div class="sector-item machinery-sec">
                            <div class="item-text bg_black">
                                <h2>Machinery</h2>
                            </div>                        
                        </div>
                        <div class="sector-item tele-sec">
                            <div class="item-text bg_black">
                                <h2>Telehandlers</h2>
                            </div>                        
                        </div>
                        <div class="sector-item exports-sec">
                            <div class="item-text bg_black">
                                <h2>Exports</h2>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>        
        </section>
        <section class="banner">
            <div class="pad">    
                <div class="contain">
                    <h2>We are here to help. If you have any questions regarding any of our products, then please get in touch.</h2>
                    <div class="bann_btn">
                        <a href="/contact.php" class="btn_1"><span>CONTACT US</span></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="social">
            <div class="pad">
                <div class="contain">
                    <div class="sectors-grid">
                        <div class="about bg_black" id="about-us">
                            <h2>Who are we?</h2>
                            <p>RP Machinery is a Shropshire based family business that specialises in selling used machinery. We deliver across the UK and internationally.</p>
                            <p>Our stock is regularly changing, so if you can't find what you are looking for on our website, then please don't hesitate to get in touch - just because it's not listed doesn't mean we don't have it. </p>
                            <p>Alternatively, you can follow us on <a href="https://www.facebook.com/rp.machinery.sales/">Facebook</a> for recent posts and all our latest product updates.</p>    
                        </div>
                        
                        <div class="facebook">
                            <div class="fb-page" data-href="https://www.facebook.com/rp.machinery.sales/" data-tabs="timeline" data-width="500" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/rp.machinery.sales/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/rp.machinery.sales/">RP Machinery Sales</a></blockquote></div>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
        <div id="simple-cookie-consent">
            <div class="cookie-consent-container">
                <div class="d-flex flex-row align-items-center"><img src="https://i.imgur.com/Tl8ZBUe.png" width="40">
                    <div class="cookie_text">
                        <span>This website uses cookies to ensure you get the best experience on our website.<br></span>
                        <a class="learn-more" href="/terms#cookies">Learn more</a>
                    </div>
                </div>
                <div class="cookie-consent-selection">
                    <div class="back_btn"><button id=cookie_btn class="btn btn_bk" type="button">Okay</button></div>
                </div>
            </div>
        </div>
    
        <div id="fb-root"></div>
    <?php include('templates/footer.php') ?>
    </div>    
    <style>
       
    </style>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0" nonce="vLjHYBlt"></script>

    <script>
        setCookie = (cName, cValue, expDays) => {
            let date = new Date();
            date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
            const expires = "expires =" + date.toUTCString();
            document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
        }

        getCookie = (cName) => {
            const name = cName + "=";
            const cDecoded = decodeURIComponent(document.cookie);
            const cArr = cDecoded.split(";");
            let value;
            cArr.foreach(val => {
                if(val.indexOf(name) === 0) value = val.substring(name.length);
            })

            return value;
        }

        document.querySelector("#cookie_btn").addEventListener("click", () => {
            document.querySelector("#simple-cookie-consent").style.display = "none";
            setCookie("cookie", true, 30);
        })

        cookieMessage = () => {
            if(!getCookie("cookie")) 
                document.querySelector("#simple-cookie-consent").style.display = "block";
        }

        window.addEventListener("load", cookieMessage);
    </script>
</body>
</html>
