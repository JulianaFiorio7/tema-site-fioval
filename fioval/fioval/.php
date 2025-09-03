<?php get_header();
$term = get_queried_object();
?>

<section class="breadcrumb">
    <div class="container">
        <a href="<?= site_url() ?>" class="breadcrumb-page">Home</a>
        <span class="breadcrumb-marker">></span>
        <span><?= $term->name  ?></span>
    </div>
</section> 

<section class="home-banner">
    
        <?php if( do_shortcode('[acf field="banner_categorias" post_id="11"]') ) { ?>
            <div class="banner-item">
                <img src="<?= do_shortcode('[acf field="banner_categorias" post_id="11"]') ?>" alt="">
            </div>
        <?php } ?>
    </div>
</section>

<?php /*<section class="servicos-desk">
    <div class="container">
        <?php if( do_shortcode('[acf field="titulo_servicos_h1" post_id="11"]') || do_shortcode('[acf field="descricao_servicos" post_id="11"]') ) { ?>
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 introcucao-servicos-home">
                    <?php if( do_shortcode('[acf field="titulo_servicos_h1" post_id="11"]') ) { ?>
                        <div class="titulo-principal">
                            <h1><?= do_shortcode('[acf field="titulo_servicos_h1" post_id="11"]') ?></h1>                 
                        </div>
                    <?php } if( do_shortcode('[acf field="descricao_servicos" post_id="11"]') ) { ?>
                        <div class="descricao">
                            <?= do_shortcode('[acf field="descricao_servicos" post_id="11"]') ?>
                        </div>   
                    <?php } ?>  
                </div>
            </div>
        <?php } ?>
        
    </div>
</section> */?>

<?php if( do_shortcode('[acf field="titulo_introducao_h1" post_id="13"]') /*|| do_shortcode('[acf field="descricao_servicos" post_id="11"]')*/ ) { ?>
    <section class="blog-neuro">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 offset-lg-1 introducao-blog">
                    <?php /*if( do_shortcode('[acf field="titulo_introducao_h1" post_id="13"]') ) {*/ ?>
                        <div class="titulo-principal">
                            <?php include('template-parts/icone-cerebro.php') ?>
                            <h1> <?= $term->name  ?> </h1>
                        </div> 
                    <?php /*if( do_shortcode('[acf field="descricao_servicos" post_id="11"]') ) {*/ ?>
                        <div class="descricao">
                            <?= $term->description  ?>
                        </div>
                    <?php /*} */?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array( 'post_type' => 'post', 'orderby' => 'name', 'order' => 'ASC', 'posts_per_page' => 3, 'paged' => $paged );
    $posts = new WP_Query( $args ); 
    if( $posts->have_posts() ) :
?>
    <section class="blog-listagem">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9 card-blog-listagem categorias-listagem">
                <div class="container-grid-1">
                    <?php 
                        $args = array( 'post_type' => 'servico', 'posts_per_page' => -1, 
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'servicos',
                                'field' => 'term_id',
                                'terms' => $term->term_id
                            )
                            ),
                            'orderby' => 'name',
							'order' => 'ASC'
                        );
                        $servicos = new WP_Query( $args );
                        if( $servicos->have_posts() ) : 
                    ?>
                    <?php while( $servicos->have_posts() ) : $servicos->the_post(); ?>
                    
                    <a href="<?php the_permalink() ?>">
                        <div class="card-servicos">
                            <?php if( do_shortcode('[acf field="imagem_destaque" post_id="'.$post->id.'"]') ) {  ?>
                                <div class="imagem-destaque">
                                    <img src="<?= do_shortcode('[acf field="imagem_destaque" post_id="'.$post->id.'"]') ?>" alt="Ícone tratamento">
                                </div>
                            <?php } ?>
                            <div class="titulo-secundario">
                                <h3> <?php the_title() ?> </h3>
                            </div>
                            <div class="button">
                                    <div class="button-1 button-sl-1">
                                        Leia mais 
                                    </div>
                            </div>
                        </div>
                    </a>
                     
                    <?php wp_reset_postdata(); endwhile; endif; ?> 
                </div>
                </div>
                <aside class="col-12 col-lg-3">
                    <div class="introducao">
                        <?php if( do_shortcode('[acf field="svg_logo_sidebar" post_id="13"]') ) { ?>
                            <div class="logo">
                                <?= do_shortcode('[acf field="svg_logo_sidebar" post_id="13"]') ?>
                            </div>
                        <?php } if( do_shortcode('[acf field="descricao_sidebar" post_id="13"]') ) { ?>
                            <p>
                                <?= do_shortcode('[acf field="descricao_sidebar" post_id="13"]') ?>
                            </p>
                        <?php } ?>
                    </div>
                    <div class="categorias">
                        <?php if( do_shortcode('[acf field="chamada_categorias_h2" post_id="13"]') ) { ?>
                            <h3>
                                <?= do_shortcode('[acf field="chamada_categorias_h2" post_id="13"]') ?>
                            </h3>
                        <?php } ?>
                        <?php
                            $terms = get_terms( array( 'taxonomy' => 'servicos', 'hide_empty' => true, 'exclude' => array( $term->term_id ), 'orderby' => 'term_name', 'order' => 'ASC') );
                            if(is_array($terms)) {
                        ?>
                            <div class="blog-single-sidebar-content">
                                <ul>
                                    <?php
                                        foreach($terms as $term){
                                            if( $term->slug != "servicos"){
                                                echo '
                                                    <li>
                                                        <a href="'.get_term_link( $term->term_id ).'" class="blog-single-content-item">
                                                            <div class="icone">
                                                                <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.80469 12.6306L7.95994 7.12959L1.80469 1.62854" stroke="#EB5569" stroke-width="1.83368" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                            </div>                                                        
                                                            '.$term->name.'
                                                        </a>
                                                    </li>
                                                ';
                                            }
                                        }
                                    ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>                    
                    <div class="contato-form">
                        <?php if( do_shortcode('[acf field="titulo_contato_h2" post_id="5"]') ) { ?>
                            <div class="contato-form-title">                            
                                <h2>
                                    <?php include('template-parts/icone-cerebro.php') ?>
                                    <br>
                                    <?= do_shortcode('[acf field="titulo_contato_h2" post_id="5"]') ?>
                                </h2>
                            </div>
                        <?php } ?>                          
                        <?php if( do_shortcode('[acf field="descricao_contato" post_id="5"]') ) { ?>
                            <div class="descricao">
                                <?= do_shortcode('[acf field="descricao_contato" post_id="5"]') ?>
                            </div>
                        <?php } ?>
                        <?= do_shortcode('[contact-form-7 id="21" title="Contato"]'); ?>
                    </div>
                </aside>
            </div>
        </div>
        <div class="paginacao">
            <?php 
                echo paginate_links( array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $posts->max_num_pages,
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( ' %1$s', __( '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s ', __( '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>', 'text-domain' ) ),
                    'add_args'     => false,
                    'add_fragment' => '',
                ) );
            ?>
        </div>
    </section>
<?php 
    wp_reset_postdata();
    endif; 
?>   
     
<?php get_footer() ?>