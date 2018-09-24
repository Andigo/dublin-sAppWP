<?php
/**
 * Template name: Template Connect
 */
get_header();
?>

<section class="contact">
    <div class="contact-header">
        <div class="contact-header-title">
            <h1><?php echo esc_attr(get_post_meta($post->ID, 'ale_title', true));?></h1>
            <a href="#">Lorem Ipsum is simply dummy</a>
        </div>
        <input type="text" class = "contact-header-search" placeholder=" Search...">
    </div>
</section>
	<section class="contactform">
    <div class="contactform-wr">
        <form class="contactform-form">
            <input type="text" placeholder="Your name">
            <input type="text" placeholder="email adress">
            <input type="text" placeholder="Phone number">
            <textarea name="" id="" cols="30" rows="3" placeholder="Your message"></textarea>
            <button>Submit</button>
        </form>
        <div class="contactform-line"></div>
        <div class="contactform-data">
            <div class="contactform-data-mark">
                <h3>Dublin  ipad applications</h3>
                <p>Lorem Ipsum <br> simply dummytext<br>printing<br>email: mail@yourdomainname.com<br>:info@yourdomainname.com<br>
                Phone: +99 54412477, +99 984561142</p>
            </div>
            <iframe class = "contactform-data-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2384.863660898258!2d-6.2573058054061015!3d53.291977288886066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e80ea27ac2f%3A0xa00c7a9973171a0!2z0JTRg9Cx0LvQuNC9LCDQmNGA0LvQsNC90LTQuNGP!5e0!3m2!1sru!2skz!4v1528458070931" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>

<?php get_footer();
