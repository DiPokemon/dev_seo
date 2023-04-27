<?php get_header(); ?>

<div class="_container">
    <section class="page-header">
        <?php if ( function_exists( 'topland_breadcrumbs' ) ) topland_breadcrumbs(); ?>        
        <h1 class="page-header__title"><?php the_title(); ?></h1>
    </section>  

    <section id="reviews" class="page__reviews-block reviews">
        <div class="reviews_gradient_bg-img"></div>
            <div class="reviews-block__container _container">                
                <div class="reviews-block__body">                
                <div class="triple_stars revies_triple_stars"><img loading="lazy" class="triple-stars" src="<?php echo get_template_directory_uri()?>/static/img/triple_stars.svg" alt="img"></div>
                  
                <div class="main_block__wrapper">
                    <div class="slider_wrapper">
                        <div class="reviews_slider">
                            <?php echo do_shortcode('[topland_reviews]'); ?>
                        </div>
                        <div class="slider-controls">
                            <button type="button" class="reviews_slide-m-prev slide-m-prev"></button>
                            <div class="reviews_slide-m-dots slide-m-dots"></div>
                            <button type="button" class="reviews_slide-m-next slide-m-next"></button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php the_content(); ?>
    </section>
</div>   

<?php get_footer(); ?>