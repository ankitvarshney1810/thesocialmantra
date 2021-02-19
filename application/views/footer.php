    <footer>
        <img src="<?php echo base_url('images/Logo2.png'); ?>">
        <span class="footer-info top-margin-10">is rich experience in digital marketing helps you find your solutions that generate ROI (return on investment) and prove to be revenue generating for your business.</span>
        <div class="footer-social-list">
            <ul class="list-inline top-margin-20">
                <li>
                    <a href="https://www.facebook.com/thesocialmantra/" target="blank">
                        <span class="ti-facebook"></span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/thesocialmantra/" target="blank">
                        <span class="ti-instagram"></span>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/tpsdevelopers" target="blank">
                        <span class="ti-twitter-alt"></span>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/the-philosopher-stone/" target="blank">
                        <span class="ti-linkedin"></span>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCV4GUqq73JUen07lEPniUiQ/featured" target="blank">
                        <span class="ti-youtube"></span>
                    </a>
                </li>
            </ul>
        </div>
        <p class="top-margin-20">© Copyright <a href="../">The Social Mantra</a></p>
    </footer>









    <script>
        
        jQuery(document).ready(function ($) {
            // Get current path and find target link
            var path = window.location.pathname.split("/").pop();

            // Account for home page with empty path
            if (path == '') {
                path = '../';
            }


            var target = $('nav a[href="' + path + '"]');
            
            target.addClass('active');
            $(".btnm").click(function () {
                $("nav").slideToggle();
            });
            window.onload = function () {
                if (window.innerWidth < 998) {
                    //$("nav").click(function () {
                    //    $("nav").slideToggle();
                    //});;
                    $(".dropdown").click(function (){
                        $("dropdown").slideToggle();
                    })
                }
            }
        });
    
    </script>
    <script>
        $(document).ready(function(){       
            var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {
                    $("header").addClass('solid-back');
                } 
                else{
                    $("header").removeClass('solid-back');
                }
            });
        });

    </script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>