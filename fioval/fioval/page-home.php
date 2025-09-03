<?php get_header(); ?>
<main>

<section class="breadcrumb">
    <div class="container"></div>
</section>

<!-- BANNER  -->
<section class="banner-home">
    <?php if( get_field('banner_desktop', $post->ID) && get_field('banner_mobile', $post->ID)) { ?>
        <div class="banner-item">
            <img src="<?= get_field('banner_desktop', $post->ID) ?>" alt="Fioval Acessórios para Móveis" class="d-none d-md-flex">
            <img src="<?= get_field('banner_mobile', $post->ID) ?>" alt="Fioval Acessórios para Móveis" class="d-flex d-md-none">
             <div class="texto-banner">
                <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" style="visibility: hidden;">a sua loja</p>
                <p class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.8s" style="visibility: hidden;">mais perto <img src="https://fioval.com/wp-content/uploads/2025/05/icone.png" alt="Logo Fioval"></p>
                <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s" style="visibility: hidden;">de você!</p>
            </div>
        </div>
    <?php } ?>
</section>

<!-- SOBRE DESKTOP -->
<section class="sobre-home">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 sobre-empresa-imagem">
                <div class="imagem-sobre-empresa wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                    <img src="<?= get_field('imagem_sobre', $post->ID) ?>" alt="Empresa Fioval Acessórios para Móveis">
                </div>
            </div>
            <div class="col-12 col-lg-5 sobre-empresa-content wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                <div class="titulo-sobre-empresa" >
                    <div class="pretitulo-sobre-empresa">
                        <h2><?= get_field('pretitulo_sobre', $post->ID) ?></h2>
                    </div>
                    <h1><?= get_field('titulo_h1_sobre', $post->ID) ?></h1>
                </div>
                <div class="descricao-empresa">
                    <?= get_field('descricao_sobre', $post->ID) ?>
                </div>
                <a href="/a-fioval" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                    <button class="botao-branco">
                        <p>
                            CONHEÇA A FIOVAL
                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M-3.00663e-07 6.87631C-3.17514e-07 6.4909 0.286475 6.17239 0.658158 6.12198L0.761487 6.11503L14.1474 6.11564L9.31148 1.30076C9.01346 1.0041 9.01242 0.522085 9.30916 0.224146C9.57892 -0.0467066 10.0019 -0.0721879 10.3005 0.148301L10.3861 0.221828L16.5287 6.33644C16.568 6.37554 16.6021 6.41786 16.6311 6.46255C16.6393 6.47601 16.6476 6.48977 16.6555 6.50381C16.6628 6.51584 16.6693 6.52834 16.6755 6.54097C16.6841 6.55935 16.6925 6.57834 16.7001 6.59772C16.7063 6.61266 16.7115 6.6272 16.7162 6.64184C16.7218 6.66 16.7273 6.67936 16.732 6.69901C16.7354 6.71273 16.7382 6.72593 16.7406 6.73919C16.744 6.75891 16.7469 6.77932 16.7489 6.79998C16.7507 6.81573 16.7518 6.83133 16.7524 6.84696C16.7525 6.85643 16.7527 6.86635 16.7527 6.87631L16.7523 6.9058C16.7518 6.92074 16.7507 6.93567 16.7493 6.95056L16.7527 6.87631C16.7527 6.92435 16.7483 6.97135 16.7398 7.01692C16.7378 7.02781 16.7354 7.03898 16.7328 7.05011C16.7274 7.07302 16.7212 7.09509 16.714 7.11673C16.7104 7.12748 16.7063 7.13896 16.7019 7.15036C16.693 7.17327 16.6834 7.19511 16.6727 7.21638C16.6678 7.22638 16.6622 7.23685 16.6564 7.24721C16.6469 7.26412 16.6371 7.28019 16.6267 7.29585C16.6194 7.30694 16.6113 7.31847 16.6029 7.32983L16.5963 7.3386C16.5758 7.3654 16.5535 7.39079 16.5297 7.41461L16.5288 7.41532L10.3861 13.5309C10.0881 13.8276 9.60597 13.8266 9.30921 13.5287C9.03942 13.2579 9.01572 12.8349 9.23753 12.5373L9.31144 12.4521L14.1454 7.6382L0.761487 7.63759C0.340929 7.63759 -2.8228e-07 7.29675 -3.00663e-07 6.87631Z" fill="#01AEF3"/></svg>
                        </p>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- PRODUTOS DESKTOP -->
<section class="d-none d-lg-flex produtos-home"<?php if( get_field('background_produtos', $post->ID) ) { ?> style="background: url('<?= get_field('background_produtos', $post->ID) ?>'); height: 100%; background-attachment: fixed; background-size: cover;background-position: center;background-repeat: no-repeat;" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center box-titulo-produtos wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: hidden;">
                <h2><?= get_field('titulo_produtos', $post->ID) ?></h2>
                <div class="col-lg-10 offset-lg-1 descricao-box-produtos">
                    <?= get_field('descricao_produtos', $post->ID) ?>
                </div>
                <a href="/produtos">
                    <button class="botao-branco">
                        <p>Confira nossos produtos</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- PRODUTOS MOBILE -->
<section class="d-flex d-lg-none produtos-home">
    <div class="container">
        <div class="row">
            
            <div class="text-center box-titulo-produtos">
                <h2><?= get_field('titulo_produtos', $post->ID) ?></h2>
                <div class="descricao-box-produtos">
                    <?= get_field('descricao_produtos', $post->ID) ?>
                </div>
                <a href="/produtos" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                    <button class="botao-branco">
                        <p>Confira nossos produtos</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="imagem-produto-home wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: hidden;">
        <img src="<?= get_field('background_produtos_mobile', $post->ID) ?>" alt="">
    </div>
</section>

<section class="depoimentos">
    <div class="container">
        <div class="row">
            <div class="depoimentos-content">
                <div class="titulo-depoimentos">
                    <h2><?= get_field('titulo_depoimentos', $post->ID) ?></h2>
                    <div class="d-block d-lg-none logo-depoimentos">
                        <img src="<?= get_field('logo_depoimentos', $post->ID) ?>" alt="Logo Fioval">
                    </div>
                </div>
                <hr class="detalhe-depoimentos">
                <div class="d-none d-lg-block logo-depoimentos">
                    <img src="<?= get_field('logo_depoimentos', $post->ID) ?>" alt="Logo Fioval">
                </div>
            </div>
            <div class="depoimentos-google wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                <?= do_shortcode('[trustindex no-registration=google]') ?>
            </div>
        </div>
    </div>
</section>

<?php include('template-parts/cta-principal.php')  ?>

<section class="mapa">
    <?= get_field('iframe_mapa', 11) ?>
</section>

  
<?php get_footer() ?>