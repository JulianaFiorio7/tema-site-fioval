<?php get_header();
$category = get_queried_object(); ?>

<section class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-page" href="<?php echo site_url();?>" title="Home">Home</a>
        <span class="breadcrumb-marker">></span>
        <a class="breadcrumb-page" href="<?php echo site_url();?>/blog" title="Blog">Blog</a>
        <span class="breadcrumb-marker">></span>
        <spam class="pl-2"> <?=$category->name?></spam>
    </div>
</section>

 <section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center titulo-introducao-blog">
                <h1> <?=$category->name?> </h1>
            </div>
        </div>
    </div>
    <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array( 'post_type' => 'post', 'posts_per_page' => -1, 'paged' => $paged, 'cat' => $category->term_id  );
        $posts = new WP_Query( $args ); 
        if( $posts->have_posts() ) :
    ?>
    <div class="container container-grid">
        <?php  while( $posts->have_posts() ) : $posts->the_post(); ?>
            <a href="<?php the_permalink() ?>">
                <article>
                    <div class="item-img-blog">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    </div>
                    <div class="text-center item-descricao-blog">
                        <div class="item-titulo-blog text-center">
                            <h2><?php the_title() ?></h2>
                        </div>
                        <div class="resumo-post-blog">
                            <?php the_excerpt() ?>
                        </div>
                        <button class="botao-branco">
                            <p>Ver mais</p>
                        </button>
                    </div>
                </article>
            </a>
        <?php endwhile; ?>
    </div>   
    <?php endif; ?>                  
</section>


<?php get_footer() ?>
