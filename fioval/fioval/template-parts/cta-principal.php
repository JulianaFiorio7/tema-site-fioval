<!-- CTA Desktop -->
<section class="d-none d-lg-flex cta-contato"<?php if( get_field('background_cta', 11) ) { ?> style="background: url('<?= get_field('background_cta', 11) ?>'); background-size: cover;background-position: center;background-repeat: no-repeat;" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="box-cta-contato">
                <div class="titulo-cta-contato wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                    <h2><?= get_field('titulo_cta_contato', 11) ?></h2>
                </div>
                <a target="_blank" rel="noopener noreferrer" href="<?= get_field('url_whatsapp', 11) ?>" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                    <button class="botao-branco">
                            <p>Entre em contato</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Mobile -->
<section class="d-flex d-lg-none cta-contato"<?php if( get_field('background_cta_mobile', 11) ) { ?> style="background: url('<?= get_field('background_cta_mobile', 11) ?>'); background-size: cover;background-position: center;background-repeat: no-repeat;" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="box-cta-contato">
                <div class="titulo-cta-contato wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                    <h2><?= get_field('titulo_cta_contato', 11) ?></h2>
                </div>
                <a target="_blank" rel="noopener noreferrer" href="<?= get_field('url_whatsapp', 11) ?>" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                    <button class="botao-branco">
                            <p>Entre em contato</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>