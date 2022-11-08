<?php /* Template Name: Law Page */ ?>

<?php
get_header();
?>


<div class="bg">

</div>

<main class="law-page">
    <section class="law">
        <div class="wrap">
            <h1 class="title">
                <?php echo wp_title(''); ?>
            </h1>
            <div class="content">
                <?php the_field('content') ?>
            </div>
        </div>
    </section>
</main>


<?php get_footer();