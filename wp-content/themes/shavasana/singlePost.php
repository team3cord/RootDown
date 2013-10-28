<?php
/*
Template Name: BLOG SINGLE POST Page
*/

get_header(); ?>

    <!-- =========================== | GLOBAL HERO WRAP | =========================== -->
    <section class="gHeroWrap blogHero fullWrap">
        <div>
            <h2>Root Down Blog</h2>
            <p>this is a paragraph</p>
        </div>
    </section>
    <!-- ========================= | !!!END GLOBAL HERO WRAP | ========================= -->



    <!-- =========================== | CONTENT WRAP | =========================== -->
    <!--         <div class="gContent">
            </div> -->
    <!-- =========================== | !!!END GLOBAL PAGE WRAP | =========================== -->


    <!-- =========================== |  | =========================== -->
    <!-- =========================== | !!!END | =========================== -->

    <!-- =========================== | Featured tout wrap | =========================== -->
    <div class="gContent">
        <section class="blogNavWrap full">
            <!-- ad Wrap | wraps specials ad -->
            <div class="bNav">
                <nav class="blogCatNav">
                    <ul>
                        <li class="listTitle"><span>Filter by Authors</span></li>
                        <li><a href="#" class="activeBlogCat bNavAngela">Angela Logan</a></li>
                        <li><a href="#" class="bNavVictoria">Victoria Williams</a></li>
                        <li><a href="#" class="bNavChelsey">Chelsey Moss</a></li>
                        <li><a href="#" class="bNavEleanor">Eleanor Edgerly</a></li>
                    </ul>
                </nav>
            </div>

            <div class="singlePostWrap">
                <img src="http://placehold.it/350x150">
                <div class="postWrap">
                    <h2>blog title next to a blog image</h2>
                    <p>Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>
                    <p>Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>
                    <p>Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>
                    <p>Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <div class="commentFormWrap">
                    <div>
                        <form method="post" action="">

                            <div class="halfFromWrap">
                                <label for="Name">First Name</label>
                                <input type="text" name="commentName" id="commentName" />
                            </div>

                            <div class="halfFromWrap fromRight">
                                <label for="Email">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>

                            <label for="Message">Comment</label><br />
                            <textarea name="comment" rows="20" cols="20" id="comment"></textarea>

                            <input type="submit" name="commentSubmit" value="Submit Comment" class="submitBtn" />
                        </form>
                    </div>
                </div>

                <div class="commentsWrap">

                    <div class="commentHolder">
                        <img src="http://placehold.it/185x185">
                        <div class="singleComment">
                            <h3 class="commentName">Caleb Stauss</h3>
                            <date class="commentDate">11/09/13</date>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

                            <p>Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.t</p>
                        </div>
                    </div>
                    <!-- end comment holder -->
                </div>

            </div>



        </section>
    </div>
    <!-- =========================== | !!!END FTW | =========================== -->




<?php get_footer(); ?>