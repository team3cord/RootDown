<?php
/*
Template Name: HOME Page
*/

get_header(); ?>

        <!-- =========================== | GLOBAL HERO WRAP | =========================== -->
       <section class="gHeroWrap indexHero fullWrap" id="indexVideo">
            <div>
                <h2>Join Us for Practice</h2>
                <a href="#" class="btn btnPurp Share">Watch Video</a>
                <a href="#" class="btn">Sign Up</a>
            </div>
        </section>
        <!-- ========================= | !!!END GLOBAL HERO WRAP | ========================= -->

<!-- </section>
        <!-- ========================= | !!!END GLOBAL HERO WRAP | ========================= -->






        <!-- =========================== | CONTENT WRAP | =========================== -->
        <div class="gContent">

            <!-- =========================== |  | =========================== -->
            <!-- =========================== | !!!END | =========================== -->

            <!-- =========================== | Featured tout wrap | =========================== -->
            <section class="ftw full">
                <!-- ad Wrap | wraps specials ad -->
                <div class="adWrap nonM half">
                    <h2>$15 for 1 Week of Unlimited Yoga</h2>
                        <span>* New Students Only * </span>
                        <p clas="smallLimit">Limited to one per student</p>
                </div>
                 <!-- schedule wrap Wrap | wraps  schedule-->
                <div class="shedWrap">
                    <div class="mbWrap">
                    <h2>Date is here</h2>
                        <ul>
                            <li>9:00 am Core Yoga  Emma-Rose Rossoff (1) 1 hour</li>
                            <li>12:00 pm Power Lunch Hour eleanor edgerly 1 hour</li>
                            <li>5:30 pm Power Yoga  eleanor edgerly (2) 1 hour</li>
                        </ul>
                        <a href="#" class="btn btnPurp Share"><i class="icon-plus"></i>Share</a>
                        <a href="#" class="btn">Learn More</a>
                        <a href="#" class="btn">Sign Up</a>
                    </div>
                </div>
            </section>
            <!-- =========================== | !!!END FTW | =========================== -->

            <!-- =========================== |  | =========================== -->
            <section class="iAbout full">
                <div class="iAboutInner">
                    <div class="iAboutText">
                        <div class="iAboutTextInner">
                            <h2>About RootDownYoga</h2>
                            <p>We at Root Down Yoga believe in living a grounded, simple life filled with vitality and health.  Our goal is to offer a simple, clean, and quiet space with invigorating, fun classes designed to suit the needs of all our members.</p>
                            <a href="#" class="btn">Learn More</a>
<!--                             <div class="iNewsLetter">
                                <h2>News Letter Sign Up</h2>
                                 <form action="index.html" method="post" class="subscribe-form">
                                  <input type="email" name="email" class="subscribeInput" placeholder="Email address" autofocus>
                                  <input type="submit" name="subscribe" value="subscribe" class="signUpBtn iNewsBtn" />
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <div class="iAboutClass">
                        <h2>Yoga Classes</h2>
                        <p>Our classes are intended for all levels of practice. We offer a diverse schedule that focuses on connecting movement with breath.</p>
                        <span class="iClassPadBtn">
                            <a href="#" class="btn">Learn More</a>
                        </span>
                    <div>
                </div>
            </section>
            <!-- =========================== | !!!END | =========================== -->
            

            <!-- =========================== |  | =========================== -->
            <section class="iYogaAk fulll">
                
                <div class="iYogaInner">

                    <div class="iYogaKid">
                        <h2>Yoga for Kids</h2>
                        <p>Encourages community and cooperation</p>
                        <!--<a href="#" class="btn learnMore">Learn More</a>
                        <a href="#" class="btn">View Schedule</a>-->
                    </div>

                    <div  class="iYogaAdult">
                        <h2>Yoga for Adults</h2>
                        <p>Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus. Maenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna.</p>
                        <!--<a href="#" class="btn learnMore">Learn More</a>-->
                        <a href="#" class="btn">View Schedule</a>
                    </div>

                    <div class="iBlog">

                        <!-- THE LOOP -->
                <?php


                    $args = array( 'posts_per_page' => 2, 'category' => 4 );
                                // GET TWO POSTS FROM FEATURED CATEGORY
                    $myposts = get_posts( $args );
                    
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>        

                        <section class="iBlogWrap iFirstBlog">
                            <img src="http://placehold.it/350x150"><?//php the_post_thumbnail( $size, $attr ); ?>
                            
                            <div>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                <p><?php the_excerpt(); ?></p>

                                <a href="<?php the_permalink(); ?>" class="btn">Learn More</a>
                                <a href="#" class="btn btnPurp Share">Share</a>
                            </div>
                        </section>
                                <?php endforeach; 
                                    wp_reset_postdata();?>


                    </div>

                    <div class="iInstagram">
                        <section class="iInstaWrap">
                            <h1>Power Yoga for the Gorge</h1>
                            <div class="iGramPicWrap"> 
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                                <img src="http://placehold.it/120x120">
                            </div>
                        </section>
                    </div>

                </div>

            </section>
            <!-- =========================== | !!!END | =========================== -->



        <div>
        <!-- =========================== | !!!END CONTENT WRAP | =========================== -->

        </div>
    </div>
    <!-- =========================== | !!!END GLOBAL PAGE WRAP | =========================== -->


<?php get_footer(); ?>
