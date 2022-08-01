<?php 
    include('templates/header.php');
    include('includes/dbh.inc.php');
    require('dotenv').config(); 
?>

<main>
    <div class="wrapper-main"> 
        <div class="exports-section"> 
            <h1>Contact Us</h1>
            <div class="contain  bg_black">
                <div class="export-content">
                    <div class="contact_grid">
                        <div class="contact_form">
                            <p>We would love to hear from you, give us a call or fill out the form below and we will be in touch.</p>
                            <form action="contactform.php" method="POST">
                                <input type="text" name="name" placeholder="Full Name" required>
                                <input type="text" name="email" placeholder="Your Email" required>
                                <input type="text" name="subject" placeholder="Subject" required>
                                <textarea rows="5" name="message" placeholder="Message" required></textarea>
                                <div class="g-recaptcha" data-sitekey="6Lcu0S8hAAAAAGu4M8I1qpORgFdEFPjLyONakzxE"></div>
                                <button type="submit" name="submit">SEND MESSAGE</button>
                            </form>
                        </div>
                        <div class="contact_address">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2407.3292404502895!2d-2.6368997682222126!3d52.88849465227929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487a911513af1893%3A0x28412437d489612f!2sRP%20Machinery%20Sales!5e0!3m2!1sen!2suk!4v1658781277118!5m2!1sen!2suk" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="details">
                        <div class="details_items"><span class="text-yellow">Tel: </span>07792 715169</div>
                        <div class="details_items"><span class="text-yellow">Email: </span>enquiries@rpmachinerysales.co.uk</div>
                        <div class="details_items"><span class="text-yellow">Address: </span>School Farm, Lower Heath, Whitchurch SY13 2BQ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('templates/footer.php') ?>