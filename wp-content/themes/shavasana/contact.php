<?php
/*
Template Name: CONTACT Page
*/

get_header(); ?>


    <!-- =========================== | GLOBAL HERO WRAP | =========================== -->
    <section class="gHeroWrap homeHero fullWrap">

        <!-- Global Hero | Main image / video / slider after header -->
        <section class="gHero mapWrap full">
            <div class="mapContact">
                <div class="Flexible-container">
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ch/maps?f=q&amp;source=s_q&amp;hl=de&amp;geocode=&amp;q=Bern&amp;aq=&amp;sll=46.813187,8.22421&amp;sspn=3.379772,8.453979&amp;ie=UTF8&amp;hq=&amp;hnear=Bern&amp;t=m&amp;z=12&amp;ll=46.947922,7.444608&amp;output=embed&amp;iwloc=near"></iframe>
                </div>

                <div class="mapContactInfo">
                    <a href="a" class="mapPhone">541.771.8144</a>
                    <span class="mapAdress">202 Cascade Ave, Hood River, OR</span>
                    <ul class="mapSocial">
                        <li><a href="#" class="sIcons facebook"><i class="icon-facebook"></i></li>
                        <li><a href="#" class="sIcons instagram"><i class="icon-instagram"></i></a></li>
                        <li><a href="#" class="sIcons pintrest"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#" class="sIcons twitter"><i class="icon-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- !!!END GLOBAL HERO -->

    </section>
    <!-- ========================= | !!!END GLOBAL HERO WRAP | ========================= -->



    <!-- =========================== | CONTENT WRAP | =========================== -->
    <div class="gContent">

        <!-- =========================== |  | =========================== -->
        <!-- =========================== | !!!END | =========================== -->

        <!-- =========================== | Featured tout wrap | =========================== -->
        <section class="ftw full">
            <!-- ad Wrap | wraps specials ad -->
            <div class="adWrap classePrice nonM half">
                <p>class pricing here</p>
            </div>
            <!-- schedule wrap Wrap | wraps  schedule-->
            <div class="shedWrap">
                <h2>Date is here</h2>
                <div class="mbWrap">
                    This is the mind body stuff
                </div>
                <a href="#" class="btn btnPurp Share"><i class="icon-plus"></i>Share</a>
                <a href="#" class="btn">Learn More</a>
                <a href="#" class="btn">Sign Up</a>
            </div>
        </section>
        <!-- =========================== | !!!END FTW | =========================== -->

        <!-- =========================== | Classes Wrap | =========================== -->
        <section class="contactWrap">
            <div class="contactInner">
                <!-- =========================== | Contact half | =========================== -->
                <section class="contactHalf callUs">
                    <div class="callUsWrap">
                        <h2>Drop us a line</h2>
                        <p>We at Root Down Yoga believe in living a grounded, simple life filled with vitality and health.  Our goal is to offer a simple, clean, and quiet space with invigorating, fun classes designed to suit the needs of all our members.</p>
                        <ul class="angelaContact">
                            <li>Angela Logan</li>
                            <li><a href="">info@getrootdown.com</a></li>
                            <li><a href="">541.399.7788</a></li>
                        </ul>
                    </div>
                    <div class="cNewsletterWrap">
                        <h2 class="messageTitle">Subscribe to our newsletter</h2>
                        <p>We at Root Down Yoga believe in living a grounded, simple life filled with vitality and health.  Our goal is to offer a simple, clean, and quiet space with invigorating, fun classes designed to suit the needs of all our members.</p>
                        <div>
                            <form>
                                <input type="text" name="signUp" id="signUp" class="newsLetterInput" />
                                <input type="submit" name="subscribe" value="subscribe" class="signUpBtn" />
                            </form>
                        </div>
                    </div>
                </section>

                <!-- =========================== | Classes row #1 | =========================== -->
                <section class="contactHalf">
                    <h2>Send us a message</h2>
                    <div class="contactFormWrap">
                        <form method="post" action="">

                            <div class="formNameWrap">
                                <label for="Name">First Name</label>
                                <input type="text" name="firstName" id="firstName" class="firstName"/>
                            </div>

                            <div class="formNameWrap nameRight">
                                <label for="Name">Last Name</label>
                                <input type="text" name="lastName" id="lastName" class="lastName"/>
                            </div>

                            <div class="formNameWrap">
                                <label for="Email">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>

                            <div class="formNameWrap nameRight">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone" id="phone" />
                            </div>

                            <label for="Message">Message</label><br />
                            <textarea name="message" rows="20" cols="20" id="message"></textarea>

                            <input type="submit" name="submit" value="Send Message" class="contactSubmitBtn" />
                        </form>
                    </div>
                </section>

            </div>
        </section>
        <!-- =========================== | !!!END | =========================== -->



        <div>
            <!-- =========================== | !!!END CONTENT WRAP | =========================== -->


        </div>
        <!-- =========================== | !!!END GLOBAL PAGE WRAP | =========================== -->
    </div>



<?php get_footer(); ?>