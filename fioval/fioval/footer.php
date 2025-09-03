<footer>
    <div class="container">
        <div class="row footer-conteudo">		
            <div class="col-lg-4 text-center logo-footer">
                <?php if( get_field('logo_footer', 11) )	{ ?>	
                    <a href="<?= site_url()?>" name="Home" aria-label="Logo Fioval">
                        <img src="<?= get_field('logo_footer', 11) ?>" alt="Logo Fioval" width="162" height="130">
                    </a>
                <?php } ?>
                <ul class="redes-header">
                    <?php if( get_field('url_facebook', 11) ) { ?>
                        <li>
                            <a href="<?= get_field('url_facebook', 11) ?>" target="_blank" rel="noopener noreferrer" aria-label="URL Facebook"> 
                                <?= get_field('svg_facebook', 11) ?>
                            </a>
                        </li>
                    <?php } if( get_field('url_instagram', 11) ) { ?>
                        <li>
                            <a href="<?= get_field('url_instagram', 11) ?>" target="_blank" rel="noopener noreferrer" aria-label="URL Instagram">
                                <?= get_field('svg_instagram', 11) ?>
                            </a>
                        </li>
                    
                    <?php } if( get_field('url_whatsapp', 11) ) { ?>
                        <li>
                            <a href="<?= get_field('url_whatsapp', 11) ?>" target="_blank" rel="noopener noreferrer" aria-label="URL WhatsApp"> 
                                <?= get_field('svg_whatsapp', 11) ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <div class="descricao-footer">
                    <p><?= get_field('texto_footer', 11) ?></p>
                </div>
            </div>
            <div class="col-lg-2 footer-listagem">
                <div class="listagem">
                    <?php  
                        wp_nav_menu( 
                            array(
                                'menu' => 'Menu Principal',
                                'container'         => 'div',
                                'container_class'   => 'navbar-collapse-menu',
                                'container_id'      => 'navegacao',
                                'menu_class'        => 'navbar-nav menu'
                            ) 
                        ); 
                    ?>
                </div>
            </div>
            <div class="col-lg-4 footer-listagem">
                <a href="/produtos"> 
                    <p class="titulo-footer">Produtos</p>
                </a>
                <div class="listagem produtos">
                    <ul>
                    <?php
                        $terms = get_terms(array('taxonomy' => 'produtos', 'hide_empty' => true, 'orderby' => 'term_name'));
                        if (is_array($terms)) {
                            foreach ($terms as $term) {
                                if ($term->slug != "sem-categoria") {
                                    echo '
                                    <li>
                                        <a href="' . get_term_link($term->term_id) . '">
                                            <p>' . $term->name . '</p>
                                        </a>
                                    </li>
                                    ';
                                }
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
            <div class="linha">
                <svg width="1123" height="2" viewBox="0 0 1123 2" fill="none" xmlns="http://www.w3.org/2000/svg"><line y1="1" x2="1123" y2="1" stroke="#01AEF3" stroke-width="2"/></svg>
            </div>
            <div class="col-12 footer-infos">
                <ul class="infos-footer">
                    <?php if( get_field('email', 11) ) { ?>
                        <li>
                            <a href="mailto:<?= get_field('email', 11) ?>" target="_blank" rel="noopener noreferrer" aria-label="E-mail"> 
                                <?= get_field('svg_email', 11) ?>
                                <p><?= get_field('email', 11) ?></p>
                            </a>
                        </li>
                    <?php } if( get_field('url_whatsapp', 11) ) { ?>
                        <li>
                            <a href="<?= get_field('url_whatsapp', 11) ?>" target="_blank" rel="noopener noreferrer" aria-label="URL Instagram">
                                <?= get_field('svg_whats_footer', 11) ?>
                                <p><?= get_field('numero_whats', 11) ?></p>
                            </a>
                        </li>
                    
                    <?php } if( get_field('url_endereco', 11) ) { ?>
                        <li>
                            <a href="<?= get_field('url_endereco', 11) ?>" target="_blank" rel="noopener noreferrer" aria-label="URL WhatsApp"> 
                                <?= get_field('svg_endereco', 11) ?>
                                <p><?= get_field('endereco', 11) ?></p>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>	
</footer>

<?php include('template-parts/whatsapp-footer.php')  ?>

<div class="copyright">
	<div class="container">
		<p class="text-center mb-0">Copyright © 2025. Fioval Acessórios para Móveis LTDA - 01.750.283/0001-51 - Desenvolvido por 
            <a href="https://wa.me/5554991691780" target="_blank" aria-label="Juliana Fiório">Juliana Fiório</a>
	    </p>
	</div>
</div>

<div class="div-gotop">
	<button class="gotop" aria-label="Botão ir para o topo da página">
		<svg width="25" height="15" viewBox="0 0 25 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23 13L12.5 2L2 13" stroke="#657157" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
	</button>
</div>
<script>
  window.addEventListener('load', function() {
    document.documentElement.style.visibility = 'visible';
    document.body.style.visibility = 'visible';
    document.getElementById('preloader').style.display = 'none';
  });
</script>



</body>
</html>
<?php wp_footer(); ?>