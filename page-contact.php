<?php 
get_header();
?>

<h1 class="cocoa_text"> <?php echo get_the_title(); ?> </h1>
<div class="contact_form_container"> 
    <div class="overall_form">
        <?php echo do_shortcode('[wpforms id="123"]'); ?>
        <?php echo do_shortcode('[wpforms id="129"]'); ?>
        <!-- CONFIGURE CAPTCHA -->
    </div>
</div>
<h2>OUR LOCATIONS</h2>
<section class="locations">
    <div class="map_container">

        <div class="address_container">
            <h3>London</h3>
            <p class="address"><i class="fa-solid fa-location-dot"></i><span class="icon_space">11-12 Gee's Ct, London W1U 1JN</p>
        </div>

        <div class="map"> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.918924246115!2d-0.15266982238182347!3d51.5147034101685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760d85ce507fa3%3A0x527f152202f97b90!2sS.K.H%20Beauty%20Clinic!5e0!3m2!1sen!2suk!4v1690469843275!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="day">
            <ul>
                <li>MON - THUR:</li>
                <li>FRI & SAT:</li>
                <li>SUN:</li>
            </ul>
        </div>
        <div class="time">
        <ul>
                <li>9:30am - 8:00pm</li>
                <li>9:30am - 6:00pm</li>
                <li>10:00am - 4:00pm</li>
            </ul>
        </div>

        <div class="contact_location">
            <ul>
                <li><a class="contact" href="mailto:info@skh-london.com"><i class="fa-solid fa-envelope"></i><span class="icon_space">info@skh-london.com</a></li>
                <li><a class="contact" href="tel: +44 (238)4923084"><i class="fa-solid fa-phone-volume"></i><span class="icon_space">02384923084</a></li>
                <li><a href="https://shorturl.at/BEU06"><i class="fa-solid fa-calendar-days"></i><span class="icon_space">BOOK NOW</a></li>
            </ul>
        </div>
    </div>

    <div class="map_container">

            <div class="address_container">
                <h3>Dubai</h3>
                <p class="address"><i class="fa-solid fa-location-dot"></i><span class="icon_space">Crescent Rd - The Palm Jumeirah - Dubai - United Arab Emirates</p>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11391.494268623099!2d55.13929146451265!3d25.11875790256082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f153e3609c979%3A0x5945a418a804ac5!2sAtlantis%2C%20The%20Palm!5e0!3m2!1sen!2suk!4v1690453833785!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="day">
                <ul>
                    <li>MON - FRI:</li>
                    <li>SAT:</li>
                    <li>SUN:</li>
                </ul>
            </div>
            <div class="time">
                <ul>
                    <li>9:30am - 8:00pm</li>
                    <li>9:30am - 6:00pm</li>
                    <li>10:00am - 4:00pm</li>
                </ul>
            </div>

            <div class="contact_location">
                <ul>
                    <li><a class="contact" href="mailto:info@skh-london.com"><i class="fa-solid fa-envelope"></i><span class="icon_space">info@skh-london.com</a></li>
                    <li><a class="contact" href="tel: +44 (238)4923084"><i class="fa-solid fa-phone-volume"></i><span class="icon_space">02384923084</a></li>
                    <li><a href="https://shorturl.at/BEU06"><i class="fa-solid fa-calendar-days"></i><span class="icon_space">BOOK NOW</a></li>
                </ul>
            </div>
           
    </div>

</section>

<?php
get_footer();
?>