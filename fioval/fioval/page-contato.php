<?php get_header() ?>

<?php include('template-parts/breadcrumb.php') ?>

<!-- BANNER  -->
<section class="banner">
    <?php if( get_field('banner_desktop', $post->ID) && get_field('banner_mobile', $post->ID)) { ?>
        <div class="banner-item">
            <img src="<?= get_field('banner_desktop', $post->ID) ?>" alt="Fioval Acessórios para Móveis" class="d-none d-md-flex">
            <img src="<?= get_field('banner_mobile', $post->ID) ?>" alt="Fioval Acessórios para Móveis" class="d-flex d-md-none">
            <h1><?= get_field('titulo_contato', $post->ID) ?></h1>
        </div>
    <?php } ?>
</section>


<section class="contato">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center intro-contato">
                <div class="descricao-contato">
                    <?= get_field('descricao_contato', $post->ID) ?>
                </div>
            </div>
            
            <div class="col-lg-7 formulario-contato wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                <?php if( do_shortcode('[contact-form-7 id="96d4d4a" title="Formulário de contato"]')) { ?>
                    <div class="col-lg-10 offset-lg-1 formulario">
                        <?= do_shortcode('[contact-form-7 id="96d4d4a" title="Formulário de contato"]') ?>
                        
                    </div>
                <?php } ?>
            </div>
            <div class="col-lg-5 infos-contato wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                <ul>
                    <?php if( get_field('email', 11) ) { ?>
                        <li>
                            <a href="mailto:<?= get_field('email', 11) ?>" target="_blank" rel="noopener noreferrer" aria-label="E-mail"> 
                                <?= get_field('svg_email', 11) ?>
                                <p><?= get_field('email', 11) ?></p>
                            </a>
                        </li>
                    <?php } if( get_field('url_whatsapp', 11) ) { ?>
                        <li>
                            <a href="<?= get_field('url_whatsapp', 11) ?>" target="_blank" rel="noopener noreferrer" aria-label="URL WhatsApp">
                                <?= get_field('svg_whats_footer', 11) ?>
                                <p><?= get_field('numero_whats', 11) ?></p>
                            </a>
                        </li>
                    
                    <?php } if( get_field('url_endereco', 11) ) { ?>
                        <li>
                            <a href="<?= get_field('url_endereco', 11) ?>" target="_blank" rel="noopener noreferrer" aria-label="URL Endereço"> 
                                <?= get_field('svg_endereco', 11) ?>
                                <p><?= get_field('endereco', 11) ?></p>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="mapa">
    <?= get_field('iframe_mapa', 11) ?>
</section>

<?php include('template-parts/cta-principal.php')  ?>

<?php get_footer() ?>