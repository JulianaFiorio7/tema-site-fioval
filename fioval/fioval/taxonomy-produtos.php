<?php get_header() ;

$category = get_queried_object();  ?>

<section class="breadcrumb">
    <div class="container">
        <a href="<?= site_url() ?>" class="breadcrumb-page">Home</a>
        <span class="breadcrumb-marker">></span>
        <a class="breadcrumb-page" href="<?= site_url();?>/produtos" title="produtos">Produtos</a>
        <span class="breadcrumb-marker">></span>
        <span class="breadcrumb-title"><?= $category->name ?></span>
    </div>
</section> 

<!-- BANNER  -->
<section class="banner">
    <?php if( get_field('banner_desktop', 15) && get_field('banner_mobile', 15)) { ?>
        <div class="banner-item">
            <img src="<?= get_field('banner_desktop', 15) ?>" alt="Fioval Acessórios para Móveis" class="d-none d-md-flex">
            <img src="<?= get_field('banner_mobile', 15) ?>" alt="Fioval Acessórios para Móveis" class="d-flex d-md-none">
            <p><?= get_field('titulo_produtos', 15) ?></p>
        </div>
    <?php } ?>
</section>

<section class="produtos-categorias">
    <div class="container">
        <div class="row">
            <div class="accordion col-lg-10 offset-lg-1" id="accordionCategorias">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Outras Categorias
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="container-grid"> 
                                <?php
                                    $terms = get_terms( array( 'taxonomy' => 'produtos', 'hide_empty' => true, 'orderby' => 'term_name', 'order' => 'ASC', 'exclude' => array( $category->term_id ) ) );
                                    if(is_array($terms)){
                                        foreach($terms as $term){
                                            $class_active = $term->slug == $category->slug ? 'active' : '';
                                            echo '
                                            <a href="'.get_term_link( $term->term_id ).'/#listagem" class="category-item '.$class_active.'">
                                                <div class="container-grid-item">
                                                    <p>'.$term->name.'</p>
                                                </div>
                                            </a>
                                            ';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="produtos-listagem" id="listagem">
    <div class="container">
        <div class="row">
            <div class="text-center titulo-categoria">
                <h1><?= $category->name ?>:</h1>
            </div>
            <div class="container-grid">    
                <?php 
                $custom_terms = get_terms('produtos');
                $termId = get_queried_object()->term_id;

                foreach($custom_terms as $custom_term) {
                    wp_reset_query();
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'post_type' => 'produto',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'produtos',
                                'field' => 'term_id',
                                'terms' => $termId,
                            ),
                        ),
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                        'paged' => $paged
                    );
                }

                $loop = new WP_Query($args);
                $contador = 0; // Inicia o contador

                if($loop->have_posts()) :
                    while($loop->have_posts()) : $loop->the_post();
                        // Incrementa o contador e define o delay
                        $delay = 0.2 + ($contador * 0.1);
                        $delay_formatado = number_format($delay, 1, '.', '');
                        $contador++;
                ?>
                    <a class="box-produto wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?= $delay_formatado ?>s" style="visibility: hidden;" href="<?php the_permalink(); ?>" aria-label="Link para a categoria">
                        <div class="container-grid-item">
                            <div class="item-icone-produtos">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                            </div>
                            <div class="item-titulo-produtos text-center">
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <div class="ver-mais">
                                <p>Ver mais</p>
                            </div>
                        </div>
                    </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
    </div>
</section>

<?php include('template-parts/catalogo.php') ?>

<?php get_footer() ?>