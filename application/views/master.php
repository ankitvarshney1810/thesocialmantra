<?php include('header.php'); ?>    
<div class="slide_wrapper">
	<div class="owl-carousel">
		<img src="<?php echo base_url('images/proposal-2.png'); ?>">
		<img src="<?php echo base_url('images/proposal.png'); ?>">
		<img src="<?php echo base_url('images/proposal-9.png'); ?>">
	</div>
	<script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            animateOut: 'fadeOut',
            items:1,
            loop:true,
            margin:0,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:false
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    </script>
</div>

    <main>
        <img src="<?php echo base_url('images/proposal-2.png'); ?>" alt=""> 
    </main>
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="<?php echo base_url(); ?>tsm/services/search_engine_optimization" class="single-promo-section text-center">
                        <div class="single-promo-content">
                            <img src="<?php echo base_url('images/seo.svg'); ?>" alt="">
                            <h6>Search Engine Optimization</h6>
                            <p>that helps your business show on top listings in Google</p>
                        </div>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="<?php echo base_url(); ?>tsm/services/search_engine_marketing" class="single-promo-section text-center">
                        <div class="single-promo-content">
                            <img src="<?php echo base_url('images/search.svg'); ?>" alt="">
                            <h6>Search Engine Marketing</h6>
                            <p>is a form of Internet marketing that involves the promotion of websites</p>
                        </div>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="<?php echo base_url(); ?>tsm/services/social_media_marketing" class="single-promo-section text-center">
                        <div class="single-promo-content">
                            <img src="<?php echo base_url('images/computer.svg'); ?>" alt="">
                            <h6>Social Media Marketing</h6>   
                            <p>is a form of Internet marketing that involves the promotion of websites </p>
                        </div>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="<?php echo base_url(); ?>tsm/services/content_development" class="single-promo-section text-center">
                        <div class="single-promo-content">
                            <img src="<?php echo base_url('images/content.svg'); ?>" alt="">
                            <h6>Content Marketing</h6>
                            <p>is one of the best ways to increase organic reach and gain Brand Awareness</p>            
                        </div>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="<?php echo base_url(); ?>tsm/services/website_development" class="single-promo-section text-center">
                        <div class="single-promo-content">
                            <img src="<?php echo base_url('images/laptop.svg'); ?>" alt="">
                            <h6>Website Development</h6>   
                            <p>is key to online business and leads                                                  </p>
                        </div>
                        <div class="line"></div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="content">At <span>The Social Mantra</span>, our mission is to provide our clients with individualized, expert digital marketing solutions that drives ROI. Our team brings with it a rich and diverse background in SEO, Content Marketing, Search Engine Marketing, Website Development & Social Media Optimization.</div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="stat">
                        <div class="stat-option">
                            <span>100+</span>
                            <p>Happy Customers</p>
                        </div>
                        <div class="stat-option">
                            <img src="<?php echo base_url('images/spacebar.png'); ?>">
                        </div>
                        <div class="stat-option">
                            <span>150+</span>
                            <p>Campaigns Delivered</p>
                        </div>
                        <div class="stat-option">
                            <img src="<?php echo base_url('images/spacebar.png'); ?>">
                        </div>
                        <div class="stat-option">
                            <span>1500+</span>
                            <p>Content Stories</p>
                        </div>
                        <div class="stat-option">
                            <img src="<?php echo base_url('images/spacebar.png'); ?>">
                        </div>
                        <div class="stat-option">
                            <span>$100M</span>
                            <p>Adspend Managed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-heading">
                        <h4>Contact with us</h4>
                        <p>It's very easy to get in touch with us. Just use the contact form or pay us a visit for a coffee at the office. Dynamically innovate competitive technology after an expanded array of leadership.</p>
                    </div>
                    <div class="contact-footer">
                        <h5>Head Office</h5>
                        <p>Virendrapuram 505 Gram BhikariPur Post DLW Varansi</p>
                        <ul>
                            <li><img src="<?php echo base_url('images/call-answer.svg'); ?>"> <span>Phone: +919810889145 </span></li>
                            <li><img src="<?php echo base_url('images/email.svg'); ?>"> <span>Email: amit.chandra@thesocialmantra.com </span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-footer">
                        <h4>Main Links</h4>
                        <ul class="top-margin-20">
                            <li><a href="<?php echo base_url(); ?>tsm"> Home</a></li>
                            <li><a href="<?php echo base_url(); ?>tsm/about"> About Us</a></li>
                            <li><a href=""> Blog</a></li>
                            <li><a href=""> Career</a></li>
                        </ul>
                    </div><div class="contact-footer">
                        <h5>Services</h5>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>tsm/services/search_engine_optimization"> Search Engine Optimization</a></li>
                            <li><a href="<?php echo base_url(); ?>tsm/services/search_engine_marketing"> Search Engine Marketing</a></li>
                            <li><a href="<?php echo base_url(); ?>tsm/services/social_media_marketing"> Social Media Marketing</a></li>
                            <li><a href="<?php echo base_url(); ?>tsm/services/content_development"> Content Marketing</a></li>
                            <li><a href="<?php echo base_url(); ?>tsm/services/website_development"> Website Development</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <form action="tsm/query" method="post">
                        <h4>Reach us quickly</h4>
                        <div class="row top-margin-30">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" name="phone" value="" class="form-control" id="phone" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="company" value="" size="40" class="form-control" id="company" placeholder="Your Company">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-20 text-sm-right text-center">
                                <button type="submit" class="btn btn-apply" id="btnContactUs">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
