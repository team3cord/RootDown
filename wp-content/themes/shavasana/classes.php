<?php
/*
Template Name: CLASSES Page
*/

get_header(); ?>


<?php
    include_once('MINDBODY_API_v0.5.php');
        $mb = new MINDBODY_API();
        $mbResult = $mb->getClasses();
?>
    <textarea style="background: #00FF00;"><?= $mb->getXMLRequest(); ?></textarea>
    <textarea style="background: #FF00FF;"><?= $mb->getXMLResponse(); ?></textarea>




<!-- =========================== | GLOBAL HERO WRAP | =========================== -->
<section class="gHeroWrap homeHero fullWrap">

    <!-- Global Hero | Main image / video / slider after header -->
    <section class="gHero classesHero full">
        <div class="classHeroInner">
            <div>
                <h1>Root Down Classes</h1>
                <p>We at Root Down Yoga believe in living a grounded, simple life filled with vitality and health.  Our goal is to offer a simple, clean, and quiet space with invigorating, fun classes designed to suit the needs of all our members.  VinYoga instructors teach yoga in a way that is fundamental to the roots of our practice – with passion, dedication, and care, all supported by deep experience in the practice.  ”Yoga is a lifetime journey, but takes only a moment to begin.”</p>
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
        <div class="classPrice half">
            <div class="priceInner">
                <div class="priceCol1">
                    <h3>Visitor Passes</h3>
                    <span class="priceSpan">$15 - 1 class</span>

                    <h3>Private Classes</h3>
                    <span class="priceSpan">$65 - Single Private <em>(1-2 students)</em></span>
                    <span class="priceSpan">$85 - Single Private <em>(3-4 students)</em></span>
                    <span class="priceSpan">$100 - Single Private <em>(5+students)</em></span>
                </div>

                <div class="priceCol2">
                    <h3>Membership Rates</h3>
                    <span class="priceSpan capMem">Students<span>$30 - 30 day</span></span>
                            <span class="priceSpan capMem">Limited<span>$45 - 5 classes<i>
                                $80 - 10 classes</i></span></span>
                    <span class="priceSpan capMem lastPrice">Unlimited<span>$95 - 1 month</span></span>
                </div>
            </div>
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
    <section class="classWrap">

        <div class="classesInner">

            <!-- =========================== | Classes row #1 | =========================== -->

            <div class="classesTextWrap">
                <h2>Our Classes</h2>
                <p>Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus. Maenas faucibus mollis interdum..</p>
                <a href="#" class="btn btnPurp Share"><i class="icon-plus"></i>Share</a>
            </div>

            <div class="classesTextWrap">
                <h2>Our Classes</h2>
                <p>Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus. Maenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna.</p>
            </div>

            <div class="classesTextWrap">
                <h2>Our Classes</h2>
                <p>Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus. Maenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna.</p>
            </div>

            <div class="classesTextWrap">
                <h2>Our Classes</h2>
                <p>Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus. Maenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna.</p>
            </div>


            <div class="classesTextWrap">
                <h2>Our Classes</h2>
                <p>Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus. Maenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna.</p>
            </div>

            <div class="classesTextWrap">
                <h2>Our Classes</h2>
                <p>Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus. Maenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna.</p>
            </div>

            <div class="classesTextWrap">
                <h2>Our Classes</h2>
                <p>Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus. Maenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna.</p>
            </div>

            <div class="classesTextWrap">
                <h2>Our Classes</h2>
                <p>Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus. Maenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna.</p>
            </div>

            <!-- =========================== | !!!END classes #2 | =========================== -->

        </div>

    </section>
    <!-- =========================== | !!!END Classes Wrap | =========================== -->


    <!-- =========================== |  | =========================== -->
    <section class="specailClasses full">

        <div class="specialInner">

            <div class="scWrapHalf specialClass1">
                <div>
                    <h2>yoga half#1</h2>
                    <p>Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus. Maenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>

            <div class="scWrapHalf specialClass2">
                <div>
                    <h2>yoga half#2</h2>
                    <p>Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus. Maenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>

        </div>

    </section>
    <!-- =========================== | !!!END | =========================== -->



    <div>
        <!-- =========================== | !!!END CONTENT WRAP | =========================== -->


    </div>
    <!-- =========================== | !!!END GLOBAL PAGE WRAP | =========================== -->
</div>



<?php get_footer(); ?>