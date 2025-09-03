<?php get_header(); 
    $category = get_queried_object();
?>
<main>

<?php include('template-parts/breadcrumb.php') ?>

<!-- SOBRE DESKTOP -->
<section class="sobre-fioval"<?php if( get_field('background_a_fioval', $post->ID) ) { ?> style="background: url('<?= get_field('background_a_fioval', $post->ID) ?>'); height: 100%; background-size: cover;background-position: center;background-repeat: no-repeat;" <?php } ?>>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 box-sobre-fioval">
                <div class="titulo-sobre-fioval">
                    <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;"><?= get_field('titulo_a_fioval', $post->ID) ?></h1>
                    <h2><?= get_field('subtitulo_a_fioval', $post->ID) ?></h2>
                </div>
                <?= get_field('descricao_a_fioval', $post->ID) ?>
            </div>
        </div>
    </div>
</section>

<!-- SOBRE VAN DESKTOP -->
<section class="sobre-van">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5 sobre-empresa-content van">
                <div class="titulo-sobre-empresa van wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                    <h2><?= get_field('titulo_van', $post->ID) ?></h2>
                </div>
                <div class="descricao-empresa">
                    <?= get_field('descricao_van', $post->ID) ?>
                </div>
                <a href="/contato" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                    <button class="botao-branco">
                        <p>
                            ENTRE EM CONTATO
                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M-3.00663e-07 6.87631C-3.17514e-07 6.4909 0.286475 6.17239 0.658158 6.12198L0.761487 6.11503L14.1474 6.11564L9.31148 1.30076C9.01346 1.0041 9.01242 0.522085 9.30916 0.224146C9.57892 -0.0467066 10.0019 -0.0721879 10.3005 0.148301L10.3861 0.221828L16.5287 6.33644C16.568 6.37554 16.6021 6.41786 16.6311 6.46255C16.6393 6.47601 16.6476 6.48977 16.6555 6.50381C16.6628 6.51584 16.6693 6.52834 16.6755 6.54097C16.6841 6.55935 16.6925 6.57834 16.7001 6.59772C16.7063 6.61266 16.7115 6.6272 16.7162 6.64184C16.7218 6.66 16.7273 6.67936 16.732 6.69901C16.7354 6.71273 16.7382 6.72593 16.7406 6.73919C16.744 6.75891 16.7469 6.77932 16.7489 6.79998C16.7507 6.81573 16.7518 6.83133 16.7524 6.84696C16.7525 6.85643 16.7527 6.86635 16.7527 6.87631L16.7523 6.9058C16.7518 6.92074 16.7507 6.93567 16.7493 6.95056L16.7527 6.87631C16.7527 6.92435 16.7483 6.97135 16.7398 7.01692C16.7378 7.02781 16.7354 7.03898 16.7328 7.05011C16.7274 7.07302 16.7212 7.09509 16.714 7.11673C16.7104 7.12748 16.7063 7.13896 16.7019 7.15036C16.693 7.17327 16.6834 7.19511 16.6727 7.21638C16.6678 7.22638 16.6622 7.23685 16.6564 7.24721C16.6469 7.26412 16.6371 7.28019 16.6267 7.29585C16.6194 7.30694 16.6113 7.31847 16.6029 7.32983L16.5963 7.3386C16.5758 7.3654 16.5535 7.39079 16.5297 7.41461L16.5288 7.41532L10.3861 13.5309C10.0881 13.8276 9.60597 13.8266 9.30921 13.5287C9.03942 13.2579 9.01572 12.8349 9.23753 12.5373L9.31144 12.4521L14.1454 7.6382L0.761487 7.63759C0.340929 7.63759 -2.8228e-07 7.29675 -3.00663e-07 6.87631Z" fill="#01AEF3"/></svg>
                        </p>
                    </button>
                </a>
            </div>
            <div class="col-12 col-lg-7 sobre-empresa-imagem wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: hidden;">
                <div class="imagem-sobre-empresa van">
                    <img src="<?= get_field('imagem_van', $post->ID) ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GALERIA DESKTOP -->
<section class="galeria-fioval">
    <div class="container">
        <div class="row">
            <h2><?= get_field('titulo_galeria', $post->ID) ?></h2>
            <div class="video-sobre wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: hidden;">
                <?php if( get_field('video_sobre', $post->ID) ) { ?>
                    <video controls width="100%" autoplay muted loop>
                        <source src="<?= get_field('video_sobre', $post->ID) ?>" type="video/mp4">
                        Seu navegador não suporta vídeos HTML5.
                    </video>
                <?php } ?>
            </div>
            <div class="container-grid">
            <div class="owl-carousel owl-galeria wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: hidden;">
                <?php for($i = 1; $i <= 7; $i++) { if( get_field('img_galeria_fioval_'.$i.'', $post->ID) ) { ?>
                    <div class="item_img">
                        <a class="img-gallery" data-fancybox="fioval-gallery" href="<?= get_field('img_galeria_fioval_'.$i.'', $post->ID) ?>">
                            <img src="<?= get_field('img_galeria_fioval_'.$i.'', $post->ID) ?>" alt="Imagem Galeria Fioval">
                            <div class="item_img_efect">
                                <div class="item_img_efect_svg">
                                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.816 3.31372C8.01696 3.31372 3.31593 8.01472 3.31593 13.8137C3.31593 19.6127 8.01696 24.3137 13.816 24.3137C16.6447 24.3137 19.2121 23.1951 21.1002 21.3762C21.1397 21.3247 21.1831 21.2752 21.2302 21.2281C21.2774 21.1809 21.3269 21.1376 21.3784 21.098C23.1974 19.21 24.316 16.6425 24.316 13.8137C24.316 8.01472 19.615 3.31372 13.816 3.31372ZM24.3638 22.2403C26.2113 19.9308 27.316 17.0013 27.316 13.8137C27.316 6.35787 21.2719 0.313721 13.816 0.313721C6.3601 0.313721 0.315918 6.35787 0.315918 13.8137C0.315918 21.2695 6.3601 27.3137 13.816 27.3137C17.0035 27.3137 19.933 26.209 22.2425 24.3616L27.7552 29.8744C28.341 30.4602 29.2908 30.4602 29.8766 29.8744C30.4624 29.2886 30.4624 28.3389 29.8766 27.7531L24.3638 22.2403ZM13.816 7.81371C14.6444 7.81371 15.316 8.48528 15.316 9.31371V12.3137H18.316C19.1444 12.3137 19.816 12.9853 19.816 13.8137C19.816 14.6421 19.1444 15.3137 18.316 15.3137H15.316V18.3137C15.316 19.1421 14.6444 19.8137 13.816 19.8137C12.9876 19.8137 12.316 19.1421 12.316 18.3137V15.3137H9.31596C8.48753 15.3137 7.81595 14.6421 7.81595 13.8137C7.81595 12.9853 8.48753 12.3137 9.31596 12.3137H12.316V9.31371C12.316 8.48528 12.9876 7.81371 13.816 7.81371Z" fill="white"/></svg>
                                </div>
                            </div>
                        </a>  
                    </div>
                <?php } } ?>
            </div>
            </div>
        </div>
    </div>
</section>

<?php include('template-parts/cta-principal.php')  ?>

</main>
 
<?php get_footer() ?>