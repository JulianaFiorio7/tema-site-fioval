<section class="catalogo" id="catalogo">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 imagem-catalogo wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: hidden;">
                <img src="<?= get_field('imagem_catalogo', 15) ?>" alt="">
            </div>
            <div class="col-lg-6 formulario-de-catalogo">
                <div class="titulo-formulario-catalogo">
                    <?= get_field('titulo_formulario_catalogo', 15) ?>
                </div>
                <?php if( do_shortcode('[contact-form-7 id="4f4ce28" title="Catálogo"]')) { ?>
                    <div class="formulario-catalogo wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: hidden;">
                        <?= do_shortcode('[contact-form-7 id="4f4ce28" title="Catálogo"]') ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>