<?php
/*
Template Name: ELEANOR Page
*/

get_header(); ?>


    <!-- =========================== | GLOBAL HERO WRAP | =========================== -->
    <section style="background: transparent url(<?php echo get_template_directory_uri(); ?>/img/blogHeaders/eleanorHeader.jpg) no-repeat;" class="gHeroWrap angelaHero fullWrap" id="indexVideo">
        <div>
            <h2>Eleanor Edgerly</h2>
            <p>Eleanor’s passion for movement, the human form, and holistic well-being continues
                to grow and expand as she studies the body through different disciplines. Eleanor
                completed Yoga Teacher Training program in Alaska and Oregon.  Since then, she has been
                sharing alignment-based active yoga classes with in Alaska and Oregon. Eleanor is honored
                by the opportunity to contribute her love, passion, and skill to a community everywhere.</p>


        </div>
    </section>
    <!-- ========================= | !!!END GLOBAL HERO WRAP | ========================= -->


    <!-- =========================== | CONTENT WRAP | =========================== -->
    <div class="gContent">

        <!-- =========================== |  | =========================== -->
        <!-- =========================== | !!!END | =========================== -->

        <!-- =========================== | Featured tout wrap | =========================== -->
        <section class="blogNavWrap full">
            <!-- ad Wrap | wraps specials ad -->
            <div class="bNav">
                <nav class="blogCatNav">
                    <ul>
                        <li class="listTitle"><span>Filter by Authors</span></li>
                        <li><a href="<?php echo get_permalink(43); ?>" class="activeBlogCat bNavAngela">Angela Logan</a></li>
                        <li><a href="<?php echo get_permalink(49); ?>" class="bNavVictoria">Victoria Williams</a></li>
                        <li><a href="<?php echo get_permalink(45); ?>" class="bNavChelsey">Chelsey Moss</a></li>
                        <li><a href="<?php echo get_permalink(47); ?>" class="bNavEleanor">Eleanor Edgerly</a></li>
                    </ul>
                </nav>
            </div>

            <div class="featuredBlog">
                <img src="http://placehold.it/350x150">
                <div>
                    <h2>blog title next to a blog image</h2>
                    <p>Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>
                    <a href="<?php echo get_permalink(19); ?>" class="btn">Read More</a>
                </div>
            </div>

        </section>
        <!-- =========================== | !!!END FTW | =========================== -->


        <section class="blogWrap">

            <div class="blogRow">
            <!--                THE LOOP         -->
                <?php


                $args = array( 'posts_per_page' => 7, 'author' => 4 );
                // GET SEVEN POSTS FROM AUTHOR
                $myposts = get_posts( $args );

                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>


                <section class="blogPost">
                       <!-- image here -->
                        <img src="http://placehold.it/350x150"><?//php the_post_thumbnail( $size, $attr ); ?>
                        <article>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            <p><?php the_excerpt(); ?></p>

                            <a href="<?php the_permalink(); ?>" class="btn">Learn More</a>
                            <a href="#" class="btn btnPurp Share">Share</a>
                        </article>
                </section>
                <?php endforeach;
                wp_reset_postdata();?>

            <!--                THE LOOP         -->

                <section class="blogPost blogPostLast">
                    <!-- image here -->
                    <img src="http://placehold.it/350x150">
                    <article>
                        <h2>Yoga Basics</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <a href="#" class="btn">Read More</a>
                        <a href="#" class="btn share">Share</a>
                    </article>
                </section>

                <section class="blogPost rightPad">
                    <!-- image here -->
                    <img src="http://placehold.it/350x150">
                    <article>
                        <h2>Yoga Basics</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <a href="#" class="btn">Read More</a>
                        <a href="#" class="btn share">Share</a>
                    </article>
                </section>

                <section class="blogPost">
                    <!-- image here -->
                    <img src="http://placehold.it/350x150">
                    <article>
                        <h2>Yoga Basics</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <a href="#" class="btn">Read More</a>
                        <a href="#" class="btn share">Share</a>
                    </article>
                </section>

                <section class="blogPost rightPad blogPostLast">
                    <!-- image here -->
                    <img src="http://placehold.it/350x150">
                    <article>
                        <h2>Yoga Basics</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <a href="#" class="btn">Read More</a>
                        <a href="#" class="btn share">Share</a>
                    </article>
                </section>

            </div> <!-- end row -->

        </section>
        <!-- end blog wrap -->

        <!-- =========================== | Classes Wrap | =========================== -->

        <!-- =========================== | !!!END | =========================== -->



        <div>
            <!-- =========================== | !!!END CONTENT WRAP | =========================== -->


        </div>
        <!-- =========================== | !!!END GLOBAL PAGE WRAP | =========================== -->
    </div>


<?php get_footer(); ?>