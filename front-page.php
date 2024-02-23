<!-- This is the site sticky navbar -->

<?php get_header();
$base_directory = get_template_directory_uri();
?>

<!-- The header container containing the image, text and everything -->
<div class="banner-container">
    <img class="banner-img" src=<?php echo $base_directory . "/assets/images/header_banner.png" ?> alt="This is a image">
    <div class="banner-promo-text">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        } ?>
    </div>
    <form action="/" class="banner-em-form">
        <input type="email" name="customer-email" id="customer-email" placeholder="Enter your email address" class="banner-textbox textbox">
        <button type="submit" class="banner-btn btn">Get Started</button>
    </form>
</div>


<!-- This is where the about us section starts -->

<section id="about-us">
    <div class="about-us">
        <div class="prm-container">
            <img class="abt-banner" src=<?php get_full_path('/assets/images/about-us-banner.png') ?> alt="The about us image">
            <div class="about-us-info">
                <h3 class="title">About Us</h3>
                <p class="description">Testbyte is the leading provider of on-demand software testing services. We help companies create better software by improving their development and QA process. Our global network of experienced testers can help you test web and mobile apps, IoT devices, APIs, and more. Whether you need functional testing, usability testing, security testing, or performance testing, we've got you covered. With our flexible, pay-as-you-go model, you can get the testing you need, when you need it.</p>
                <div class="button-row">
                    <button type="button" class="banner-btn abt-learn-more">Learn More</button>
                    <button type="button" class="banner-btn abt-contact-us">Contact Us</button>
                </div>
            </div>
        </div>
        <div class="company-review-tiles">
            <div class="review-tile">
                <img src=<?php get_full_path('/assets/images/google_logo_picture.png') ?> class="review-tile-img" alt="Comapny Image/Logo">
                <h4 class="review-tile-title">Google</h4>
                <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

            </div>
            <div class="review-tile">
                <img src=<?php get_full_path('/assets/images/uber_logo_picture.png') ?> class="review-tile-img" alt="Comapny Image/Logo">
                <h4 class="review-tile-title">Uber</h4>
                <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

            </div>
            <div class="review-tile">
                <img src=<?php get_full_path('/assets/images/microsoft_logo_picture.png') ?> class="review-tile-img" alt="Comapny Image/Logo">
                <h4 class="review-tile-title">Microsoft</h4>
                <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

            </div>
            <div class="review-tile">
                <img src=<?php get_full_path('/assets/images/amazon_logo_picture.png') ?> class="review-tile-img" alt="Comapny Image/Logo">
                <h4 class="review-tile-title">Amazon</h4>
                <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

            </div>
            <div class="review-tile">
                <img src=<?php get_full_path('/assets/images/airbnb_logo_picture.png') ?> class="review-tile-img" alt="Comapny Image/Logo">
                <h4 class="review-tile-title">Airbnb</h4>
                <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

            </div>
            <div class="review-tile">
                <img src=<?php get_full_path('/assets/images/spotify_logo_picture.png') ?> class="review-tile-img" alt="Comapny Image/Logo">
                <h4 class="review-tile-title">Spotify</h4>
                <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

            </div>
        </div>
    </div>
    <div class="about-us-lower-seg">
        <h1 class="s-title">Why Testbyte</h1>
        <div class="more-info-tiles">
            <div class="more-info-tile">

                <i class="fa-solid fa-globe"></i>
                <h4 class="title">Global Scale</h4>
                <p class="description">Test on any device, anywhere in the world</p>
            </div>
            <div class="more-info-tile">
                <i class="fa-solid fa-users"></i>

                <h4 class="title">Real Users</h4>
                <p class="description">Real people, real devices, real results</p>
            </div>
            <div class="more-info-tile">
                <i class="fa-regular fa-clock "></i>
                <h4 class="title">Fast Delivery</h4>
                <p class="description">Rapid turnaround times, seamless integrations</p>
            </div>
            <div class="more-info-tile">
                <i class="fa-solid fa-shield-halved"></i>
                <h4 class="title">Security</h4>
                <p class="description">Secure, reliable, and compliant with industry standards</p>
            </div>
            <div class="more-info-tile">
                <i class="fa-solid fa-comment"></i>
                <h4 class="title">Expert Advice</h4>
                <p class="description">Guidance from our team of experienced testing professionals</p>
            </div>
            <div class="more-info-tile">
                <i class="fa-solid fa-wallet"></i>
                <h4 class="title">Cost effective</h4>
                <p class="description">Flexible pricing options to suit your budget</p>
            </div>
        </div>
    </div>
</section>



<!-- The features container starts here -->

<div class="features-container">
    <div class="features-header">
        <h3 class="s-title">Testing for the modern world</h3>
        <p class="description">Our platform provides end-to-end testing solutions for web and mobile applications, including functional, visual, and performance testing.</p>
        <button type="button" class="banner-btn">Learn More</button>
    </div>
    <div class="feature-list-tiles">
        <div class="feature-tile">
            <i class="fa-solid fa-desktop"></i>
            <h4 class="title">All Devices</h4>
            <p class="description">We test on all devices</p>
        </div>
        <div class="feature-tile">
            <i class="fa-solid fa-check"></i>
            <h4 class="title">All Scenarios</h4>
            <p class="description">We test all the real-world scenarios your customers encounter</p>
        </div>
        <div class="feature-tile">
            <i class="fa-solid fa-lightbulb"></i>
            <h4 class="title">All Techniques</h4>
            <p class="description">We use all the latest techniques and methodologies</p>
        </div>
        <div class="feature-tile">
            <i class="fa-solid fa-comment"></i>
            <h4 class="title">All Tools</h4>
            <p class="description">We use all the leading industry tools and platforms</p>
        </div>
        <div class="feature-tile">
            <i class="fa-solid fa-chart-simple"></i>
            <h4 class="title">All Metrics</h4>
            <p class="description">We measure all the metrics that matter to your business</p>
        </div>
        <div class="feature-tile">
            <i class="fa-solid fa-wallet"></i>
            <h4 class="title">All Budgets</h4>
            <p class="description">We work with all budgets, from startups to enterprises</p>
        </div>
    </div>
</div>




<!-- The testimonial section starts here -->
<section id="hire-through-us">
    <div class="hire-through-us">
        <div class="hire-banner">
            <img src=<?php get_full_path('/assets/images/hire_through_image.png') ?> alt="">
            <div class="hire-banner-contents">
                <h3 class="hire-promo-title"> Join out team of experts</h3>
                <p class="hire-promo-description">We're always looking for talented, passionate people to join our team. If you're ready to take your career to the next level, we'd love to hear from you.</p>
                <button type="button" class="banner-btn hire-banner-btn">View Open Position</button>
            </div>
        </div>
    </div>
    <div class="testimonials">
        <h3 class="title">
            What our customers are saying
        </h3>
        <div class="testimonial-carousel">
            <div class="carousel-tile">
                <img src=<?php get_full_path('/assets/images/tst-1.png') ?> alt="Image" class="carousel-tile-img">
                <h4 class="carousel-tile-header">Testimony 1</h4>
                <p class="description">"Testbyte has helped us improve the quality and reliability of our software, resulting in a better user experience and higher customer satisfaction." - John Smith, CTO</p>
            </div>
            <div class="carousel-tile">
                <img src=<?php get_full_path('/assets/images/tst-2.png') ?> alt="Image" class="carousel-tile-img">
                <h4 class="carousel-tile-header">Testimony 2</h4>
                <p class="description">"Testbyte has helped us improve the quality and reliability of our software, resulting in a better user experience and higher customer satisfaction." - John Smith, CTO</p>
            </div>
            <div class="carousel-tile">
                <img src=<?php get_full_path('/assets/images/tst-3.png') ?> alt="Image" class="carousel-tile-img">
                <h4 class="carousel-tile-header">Testimony 3</h4>
                <p class="description">"Testbyte has helped us improve the quality and reliability of our software, resulting in a better user experience and higher customer satisfaction." - John Smith, CTO</p>
            </div>
            <div class="carousel-tile">
                <img src=<?php get_full_path('/assets/images/tst-4.png') ?> alt="Image" class="carousel-tile-img">
                <h4 class="carousel-tile-header">Testimony 4</h4>
                <p class="description">"Testbyte has helped us improve the quality and reliability of our software, resulting in a better user experience and higher customer satisfaction." - John Smith, CTO</p>
            </div>
        </div>
    </div>
</section>
<section id="contact-us">
    <div class="contact-us">
        <h3 class="title">Contact Us</h3>
        <form action="contact-us.php" method="post">
            <div class="contact-label">
                <p>Name</p>
                <input class="textbox contact-textbox" type="text" placeholder="Enter your name" name="name">
            </div>
            <div class="contact-label">
                <p>Email</p>
                <input class="textbox contact-textbox" type="email" placeholder="Enter your email" name="email">
            </div>
            <div class="contact-label">
                <p>Message</p>
                <input class="textbox contact-textbox message" type="text" placeholder="Enter your message" name="description">
                <button type="submit" class="banner-btn contact-btn"> Send Message</button>
            </div>




        </form>
    </div>
</section>

<?php get_footer() ?>