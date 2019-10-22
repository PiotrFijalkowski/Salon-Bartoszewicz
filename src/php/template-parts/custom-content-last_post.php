<div class="row justify-content-center">
    <div class="col-11 col-md-10 article-container">
        <h1><?php echo $item['tittle']; ?></h1>
        <?php echo $item['text']; ?>
    </div>
</div>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// typ posta, status posta, postow na stronie
$the_query = new WP_Query(array(
    'post_type'=>'post', 
    'post_status'=>'publish',
    'category_name' => 'home_page', 
    'posts_per_page'=>3, 
    'paged'=>$paged)); 
?>

<?php if ( $the_query->have_posts() ) : ?>

    <!-- the loop -->
    <div class="row justify-content-center">
    <div class="col-11 col-md-10 article-container">
    <div class="row">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="col-12 my-3 col-md-6 col-lg-4 ">
            <a href="<?php the_permalink(); ?>">
                <div class="image"><?php the_post_thumbnail( 'full' ); ?></div>
            </a>
            <a href="<?php the_permalink(); ?>">
            <div class="best-text-wrapper bg-white">
                <h2 class="text-bold"><?php the_title(); ?></h2>
                <p class="excerpt"><?php the_excerpt(); ?></p>
                <a class="link_post" href="<?php the_permalink(); ?>"> Czytaj więcej...</a>
            </div>
        </a>
        </div>

    <?php endwhile; ?>
    </div>
    </div>
    </div>
    <!-- end of the loop -->
    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'W tej chwili nie ma żadnych wpisów.' ); ?></p>
<?php endif; ?>
