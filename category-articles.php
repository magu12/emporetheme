<?php
get_header();
the_post();
$post = $wp_query->get_queried_object();
$pagename = $post->post_title;
?>

<div class="bg"></div>
<main class="category-page">
    <section class="art">
        <div class="wrap">
            <div class="art__info">
                <div class="art__date">
                    <?php echo the_field('article_date') ?>
                </div>
                <h1 class="title art__title">
                    <?php echo $pagename ?>
                </h1>
                <h5 class="text art__descr">
                    <?php echo the_field('articles_text') ?>
                </h5>
                <div class="art__author">
                    <img src="<?php echo the_field('author_image') ?>" alt="">
                    <div class="art__author-info">
                        <div class="art__author-name">
                            <?php echo the_field('author_name') ?>
                        </div>
                        <div class="art__author-post">
                            <?php echo the_field('author_post') ?>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo the_field('article_image') ?>" alt="" class="art__image">
        </div>
    </section>
    <section class="content">
        <div class="wrap">
            <?php echo the_field('article_content') ?>
        </div>
    </section>
</main>


<?php get_footer();
