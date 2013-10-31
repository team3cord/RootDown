<?php get_header(); ?>
	


        <!-- =========================== | GLOBAL HERO WRAP | =========================== -->
        <section class="gHeroWrap blogHero fullWrap">
            <h2>Root Down Blog</h2>
            <p>this is a paragraph</p>
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
                            <li>Filter by Authors</li>
                            <li><a href="#" class="activeBlogCat">Angela Logan</a></li>
                            <li><a href="#">Victoria Williams</a></li>
                            <li><a href="#">Chelsey Moss</a></li>
                            <li><a href="#">VEleanor Edgerly</a></li>
                        </ul>
                    </nav>
                </div>
                
                <div class="sideAd">
                    there is an ad image here
                </div>

            </section>
            <!-- =========================== | !!!END FTW | =========================== -->

            <!-- =========================== | Classes Wrap | =========================== -->


            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <section class="blogPostWrap">
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></h2>
				<div>

				</div>

					<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->
			
			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /post details -->
			<div>
				<?php the_content(); // Dynamic Content ?>
			
				<a href="#" class="btnPurp share">Share</a>
			</div>

				<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			
			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			
			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>
			

			
			
                   

 

                   <div class="commentFormWrap">

                   		<?php comments_template(); ?>		<!-- TODO WORKOUT COMMENT SECTION -->

                        <form method="post" action="">
                            <label for="Name">First Name</label>
                            <input type="text" name="commentName" id="commentName" />
                
                            <label for="Email">Email</label>
                            <input type="text" name="email" id="email" />
                            
                            <label for="Message">Comment</label><br />
                            <textarea name="comment" rows="20" cols="20" id="comment"></textarea>

                            <input type="submit" name="commentSubmit" value="commentSubmit" class="submitBtn" />
                        </form>
                   </div>

                   <div class="commentsWrap">

                        <div class="singleComment">
                            there is an image here
                            <h3 class="commentName">Caleb Stauss<h3>
                            <date class="commentDate">11/09/13</date>
                            <p>This is a single comment</p>
                        </div>

                   </div>

            </section>
            <!-- =========================== | !!!END | =========================== -->



        <div>
        <!-- =========================== | !!!END CONTENT WRAP | =========================== -->





	
<?php get_sidebar(); ?>  <!-- TODO	SET UP AUTHOR OR CAT SIDEBAR -->

<?php get_footer(); ?>