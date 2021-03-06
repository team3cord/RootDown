<?php
/**

 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>


        <span class="footerSlogan"></span>
            <!-- ============================= | GLOBAL FOOTER | ============================= -->
        <footer class="gFooter">
        
            <!-- Top Footer Section -->
                <section class="mid">

                        <h1>Root Down Yoga | Power for the gorge | Hood River Oregon</h1>
                        <a href="#" class="footUtility fUnews">Get our newsletter</a>
                        <a href="#" class="footUtility fUclass">Sign up for a class</a>
                    
                    <!-- Footer Logo Wrap | only shown on mobile -->
                    <div class="footLogo mOnly">
<!--                         <h1>Root Down</h1> -->
                    </div>
                    <!-- END FOOTER LOGO WRAP -->


                </section>

            <!-- Bottom Footer Section -->
            <section class="full footContact">
                <section class="mid">
                    <div class="footLegal">
                        <span>© 2013 VinYoga</span>
                        <span class="footLocation">Hood River Oregon</span>
                        <span>541.399.4683</span>
                    </div>

                    <nav class="footNav">
                        <ul>
                            <li><a href="<?php echo get_permalink(9); ?>">Home</a></li>
                            <li><a href="<?php echo get_permalink(7); ?>">About</a></li>
                            <li><a href="<?php echo get_permalink(11); ?>">Classes</a></li>
                            <li><a href="<?php echo get_permalink(13); ?>">Workshops</a></li>
                            <li><a href="<?php echo get_permalink(40); ?>">Blog</a></li>
                            <li><a href="<?php echo get_permalink(17); ?>">Contact</a></li>
                        </ul>
                    </nav>

                    <ul class="footSocial">
                        <li><a href="#" class="sIcons facebook"><i class="icon-facebook"></i></li>
                        <li><a href="#" class="sIcons instagram"><i class="icon-instagram"></i></a></li>
                        <li><a href="#" class="sIcons pintrest"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#" class="sIcons twitter"><i class="icon-twitter"></i></a></li>
                    </ul>
                </section>
            </section>
            <!-- END BOTTOM FOOTER SECTION -->
            
        </footer>
        <!-- =========================== | END GLOBAL FOOTER | =========================== -->


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

    <!-- MENU SCRIPS -->
<!--     // <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.5/jquery.hammer.min.js"></script> -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mmenu.min.js"></script>

    <!-- MENU SCRIP -->
    <script type="text/javascript">
        $(function() {
            $('nav#menu').mmenu({});
        });
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


</body>
</html>
