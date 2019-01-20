
<?php get_header(); ?>

<?php if(have_posts()) { ?>
    <?php while(have_posts()) { ?>
        <?php the_post(); ?>
        <h2>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
                <?php echo get_the_title(); ?>
            </a>
        </h2>
        <div>
            Posted on:
                <a href="<?php the_permalink(); ?>">
                   <time datetime="<?php get_the_date('c') ?>">
                   <?php echo get_the_date(); ?>
                   </time>
                </a>
        </div>
        <div>
            <?php the_excerpt();
             ?>
        </div>
    <?php } ?>    
<?php } else ?>
    <?php '<p> Sorry I yo have no posts </p>'  ?>      
<?php get_footer(); ?>
