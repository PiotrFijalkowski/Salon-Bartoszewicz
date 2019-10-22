<div class="row justify-content-center py-5">
    <div class="col-11 col-md-10">
        <h1>BLOG</h1>
    </div>
</div>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// typ posta, status posta, postow na stronie
$the_query = new WP_Query(array(
    'post_type'=>'post', 
    'post_status'=>'publish', 
    'posts_per_page'=>3, 
    'paged'=>$paged)); 
?>

<?php if ( $the_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="row  justify-content-center">
        <div class="col-11 my-3 col-md-10 d-lg-flex">
            <a href="<?php the_permalink(); ?>">
                <div class="image"><?php the_post_thumbnail( 'full' ); ?></div>
            </a>
            <div class="blog-text-wrapper bg-white">
                <a href="<?php the_permalink(); ?>">
            <p class="date"><?php echo get_the_date(); ?></p>
                <h2 class="text-bold"><?php the_title(); ?></h2>
                <p class="excerpt"><?php the_excerpt(); ?></p>
            </a>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
    <!-- end of the loop -->
    <div class="row justify-content-center ">
<div class="col-11 col-md-10 justify-content-md-start">
<div class="paginacja col-md-5 mr-md-auto">
    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'W tej chwili nie ma żadnych wpisów.' ); ?></p>
<?php endif; ?>

<?php
// wyswietlanie paginacji
$big = 999999999;

echo paginate_links( array(
	'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format'    => '?paged=%#%',
    'mid_size' => 3,
	'current'   => max( 1, get_query_var('paged') ),
    'total'     => $the_query->max_num_pages,
    'prev_text' => '<img src="'. IMG_DIR . '/arrow-pagination-left.svg">',
    'next_text' => '<img src="'. IMG_DIR . '/arrow-pagination.svg">'
) );
?>
</div>
</div>
</div>