<?php get_header(); ?>

<main>

<?php include('template-parts/breadcrumb.php') ?>

<!-- BANNER  -->
<section class="banner">
    <?php if( get_field('banner_desktop', $post->ID) && get_field('banner_mobile', $post->ID)) { ?>
        <div class="banner-item">
            <img src="<?= get_field('banner_desktop', $post->ID) ?>" alt="Fioval Acessórios para Móveis" class="d-none d-md-flex">
            <img src="<?= get_field('banner_mobile', $post->ID) ?>" alt="Fioval Acessórios para Móveis" class="d-flex d-md-none">
            <h1><?= get_field('titulo_produtos', $post->ID) ?></h1>
        </div>
    <?php } ?>
</section>

<section class="produtos-listagem">
    <div class="container">
        <div class="row">
            <div class="container-grid">
                <?php
                    $categorias = get_terms(array('taxonomy' => 'produtos', 'hide_empty' => false));
                    if (!empty($categorias) && !is_wp_error($categorias)) :
                    $contador = 0;
                    foreach ($categorias as $categoria) :
                    $link = get_term_link($categoria);
                    // Calcula o delay (ex: 0.2s, 0.4s, 0.6s, ...)
                    $delay = 0.2 + ($contador * 0.1);
                    $delay_formatado = number_format($delay, 1, '.', '');
                    $contador++;
                ?>
                    <a class="box-produto wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?= $delay_formatado ?>s" style="visibility: hidden;" href="<?php echo esc_url($link); ?>" aria-label="Link para a categoria">
                        <div class="container-grid-item">
                            <div class="item-icone-produtos">
                                <?php $icone = get_field('icone_categoria', 'produtos_' . $categoria->term_id);
                                if ($icone) : ?>
                                    <img src="<?= esc_url($icone); ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="item-titulo-produtos text-center">
                                <h2><?php echo esc_html($categoria->name); ?></h2>
                            </div>
                            <div class="ver-mais">
                                <p>Ver mais</p>
                            </div>
                        </div>
                    </a>
                <?php
                    endforeach;
                endif;
                ?>

            </div>
        </div>
    </div>
</section>

<?php include('template-parts/catalogo.php') ?>

<?php get_footer() ?>
</main>
 