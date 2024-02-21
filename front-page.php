<!-- This is the site sticky navbar -->

<?php get_header();
$base_directory = get_template_directory_uri();
?>

<!-- The header container containing the image, text and everything -->
<div class="header-container">
    <div class="header-promo-text">
        <img src=<?php echo $base_directory . "/assets/images/header_banner.png" ?> alt="This is a image">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        } ?>
    </div>
    <form action="/search.php">
        <input type="text" placeholder="Enter your email address">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>

<!-- The features container starts here -->

<div class="features-container">
    <div class="features-header">
        <h3 class="title">Testing for the modern world</h3>
        <p class="description">Our platform provides end-to-end testing solutions for web and mobile applications, including functional, visual, and performance testing.</p>
        <button type="button">Learn More</button>
    </div>
    <div class="feature-list-tiles">
        <div class="feature-tile">
            <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
            <h4 class="title">All Devices</h4>
            <p class="description">We test on all devices</p>
        </div>
        <div class="feature-tile">
            <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
            <h4 class="title">All Scenarios</h4>
            <p class="description">We test all the real-world scenarios your customers encounter</p>
        </div>
        <div class="feature-tile">
            <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
            <h4 class="title">All Techniques</h4>
            <p class="description">We use all the latest techniques and methodologies</p>
        </div>
        <div class="feature-tile">
            <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
            <h4 class="title">All Tools</h4>
            <p class="description">We use all the leading industry tools and platforms</p>
        </div>
        <div class="feature-tile">
            <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
            <h4 class="title">All Metrics</h4>
            <p class="description">We measure all the metrics that matter to your business</p>
        </div>
        <div class="feature-tile">
            <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
            <h4 class="title">All Budgets</h4>
            <p class="description">We work with all budgets, from startups to enterprises</p>
        </div>
    </div>
</div>


<!-- This is where the about us section starts -->

<section id="about-us">
    <div class="about-us">
        <div class="about-us-img"><img src="" alt="This a image"></div>
        <div class="about-us-info">
            <h3 class="title">About Us</h3>
            <p class="description">Testbyte is the leading provider of on-demand software testing services. We help companies create better software by improving their development and QA process. Our global network of experienced testers can help you test web and mobile apps, IoT devices, APIs, and more. Whether you need functional testing, usability testing, security testing, or performance testing, we've got you covered. With our flexible, pay-as-you-go model, you can get the testing you need, when you need it.</p>
            <div class="button-row">
                <button type="button">Learn More</button>
                <button type="button">Contact Us</button>
            </div>
            <div class="company-review-tiles">
                <div class="review-tile">
                    <img src="" alt="Comapny Image/Logo">
                    <h4 class="review-tile-title">Google</h4>
                    <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

                </div>
                <div class="review-tile">
                    <img src="" alt="Comapny Image/Logo">
                    <h4 class="review-tile-title">Uber</h4>
                    <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

                </div>
                <div class="review-tile">
                    <img src="" alt="Comapny Image/Logo">
                    <h4 class="review-tile-title">Microsoft</h4>
                    <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

                </div>
                <div class="review-tile">
                    <img src="" alt="Comapny Image/Logo">
                    <h4 class="review-tile-title">Amazon</h4>
                    <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

                </div>
                <div class="review-tile">
                    <img src="" alt="Comapny Image/Logo">
                    <h4 class="review-tile-title">Airbnb</h4>
                    <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

                </div>
                <div class="review-tile">
                    <img src="" alt="Comapny Image/Logo">
                    <h4 class="review-tile-title">Spotify</h4>
                    <p class="review-tile-description">"Testbyte has been a great partner for us. Their on-demand testing services have helped us improve the quality of our software and accelerate our release process."</p>

                </div>
            </div>
        </div>
        <div class="about-us-lower-seg">
            <h1 class="title">Why Testbyte</h1>
            <div class="more-info-tiles">
                <div class="more-info-tile">
                    <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
                    <h4 class="title">All Global Scale</h4>
                    <p class="description">Test on any device, anywhere in the world</p>
                </div>
                <div class="more-info-tile">
                    <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
                    <h4 class="title">Real Users</h4>
                    <p class="description">Real people, real devices, real results</p>
                </div>
                <div class="more-info-tile">
                    <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
                    <h4 class="title">Fast Delivery</h4>
                    <p class="description">Rapid turnaround times, seamless integrations</p>
                </div>
                <div class="more-info-tile">
                    <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
                    <h4 class="title">Security</h4>
                    <p class="description">Secure, reliable, and compliant with industry standards</p>
                </div>
                <div class="more-info-tile">
                    <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
                    <h4 class="title">Expert Advice</h4>
                    <p class="description">Guidance from our team of experienced testing professionals</p>
                </div>
                <div class="more-info-tile">
                    <a href="" style="text-decoration: none; color: #000; font-size: 10px" class="icon">Icon</a>
                    <h4 class="title">Cost effective</h4>
                    <p class="description">Flexible pricing options to suit your budget</p>
                </div>
            </div>
        </div>
</section>



<!-- The testimonial section starts here -->
<section id="testimonials">
    <div class="testimonails">
        <div class="testimonial-header">
            <h3 class="testimonial-promo-title"> Join out team of experts</h3>
            <p class="testimonial-promo-description">We're always looking for talented, passionate people to join our team. If you're ready to take your career to the next level, we'd love to hear from you.</p>
            <button type="button">View More</button>
        </div>
    </div>
    <div class="testimonials-lower-seg">
        <h3 class="title">
            What our customers are saying
        </h3>
        <div class="testimonial-carousel">
            <div class="carousel-tile">
                <img src="" alt="Image" class="carousel-tile-image">
                <h4 class="carousel-tile-header">Testimony 1</h4>
                <p class="description">"Testbyte has helped us improve the quality and reliability of our software, resulting in a better user experience and higher customer satisfaction." - John Smith, CTO</p>
            </div>
            <div class="carousel-tile">
                <img src="" alt="Image" class="carousel-tile-image">
                <h4 class="carousel-tile-header">Testimony 2</h4>
                <p class="description">"Testbyte has helped us improve the quality and reliability of our software, resulting in a better user experience and higher customer satisfaction." - John Smith, CTO</p>
            </div>
            <div class="carousel-tile">
                <img src="" alt="Image" class="carousel-tile-image">
                <h4 class="carousel-tile-header">Testimony 3</h4>
                <p class="description">"Testbyte has helped us improve the quality and reliability of our software, resulting in a better user experience and higher customer satisfaction." - John Smith, CTO</p>
            </div>
            <div class="carousel-tile">
                <img src="" alt="Image" class="carousel-tile-image">
                <h4 class="carousel-tile-header">Testimony 4</h4>
                <p class="description">"Testbyte has helped us improve the quality and reliability of our software, resulting in a better user experience and higher customer satisfaction." - John Smith, CTO</p>
            </div>
        </div>
    </div>
</section>
<section id="contact-us">
    <div class="contact-us">
        <h3 class="header">Contact Us</h3>
        <form action="contact-us.php" method="post">
            <label for=" name">Name</label>
            <input type="text" placeholder="Enter your name" name="name">
            <label for="email">Email</label>
            <input type="text" placeholder="Enter your email" name="email">
            <label for="name">Message</label>
            <input type="text" placeholder="Enter your message" name="description">
            <button type="submit"> Send Message</button>
        </form>
    </div>
</section>

<?php get_footer() ?>