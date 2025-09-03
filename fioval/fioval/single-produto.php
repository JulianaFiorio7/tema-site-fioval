<?php get_header() ?>
<section class="breadcrumb single-produto">
    <div class="container">
        <a href="<?= site_url() ?>" class="breadcrumb-page">Home</a>
        <span class="breadcrumb-marker">></span>
        <a href="<?= site_url() ?>/produtos" class="breadcrumb-page">Produtos</a>
        <span class="breadcrumb-marker">></span>
        <span class="breadcrumb-title"><?php the_title() ?></span>
    </div>
</section> 

<section class="produto-single">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 produto-single-content">
                <div class="titulo-produto text-center">
                    <h1><?php the_title() ?></h1>
                </div>
                <div class="imagem-single-produto">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="content-single-produtos">
                    <?php the_content() ?>
                </div>
                <?php if (get_field('descricao_1', $post->ID) ) { ?>
                <h2>Variações</h2>
                <div class="tabela-scroll">
                    <table>
                        <thead>
                            <tr>
                                <?php if (get_field('referencia_1', $post->ID) ) { ?>
                                    <th>Ref.</th>
                                <?php } if (get_field('descricao_1', $post->ID) ) { ?>
                                    <th>Descrição</th>
                                <?php } if (get_field('tamanho_1', $post->ID) ) { ?>
                                    <th>Tamanho</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 10 ; $i++) { ?>
                                <tr>
                                    <?php if (get_field('referencia_'.$i.'', $post->ID) ) { ?>
                                        <td><?= get_field('referencia_'.$i.'', $post->ID) ?></td>
                                    <?php } if (get_field('descricao_'.$i.'', $post->ID) ) { ?>
                                        <td><?= get_field('descricao_'.$i.'', $post->ID) ?></td>
                                    <?php } if (get_field('tamanho_'.$i.'', $post->ID) ) { ?>
                                        <td><?= get_field('tamanho_'.$i.'', $post->ID) ?></td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?php } ?>
            </div>
            <aside class="listagem-side-bar col-12 col-lg-4">
                <div class="sidebar-intro">
                    <?php if(get_field('logo_sidebar', 15) ) { ?>
                        <img src="<?= get_field('logo_sidebar', 15) ?>" alt="">
                        <?= get_field('texto_sidebar', 15) ?>
                    <?php } ?>
                </div> 
                <div class="aside-category"> 
                    <div class="titulo-sidebar">
                        <h3><?= get_field('titulo_categorias', 15) ?></h3>
                        <div class="detalhe-svg">
                            <svg width="338" height="2" viewBox="0 0 338 2" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="338" height="2" fill="#00B0EC"/></svg>
                        </div>
                    </div>
                    <?php
                        $terms = get_terms( array( 'taxonomy' => 'produtos', 'hide_empty' => true, 'orderby' => 'term_name', 'order' => 'ASC', 'exclude' => array( $category->term_id ) ) );
                        if(is_array($terms)){
                            foreach($terms as $term){
                                $class_active = $term->slug == $category->slug ? 'active' : '';
                                echo '
                                <a href="'.get_term_link( $term->term_id ).'/#listagem" class="category-item '.$class_active.'">
                                    <div class="container-grid-item">
                                        <div class="detalhe-svg-flecha">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 8H15M15 8L8 1M15 8L8 15" stroke="#353435" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        <p>'.$term->name.'</p>
                                    </div>
                                </a>
                                ';
                            }
                        }
                    ?>
                </div>
                <div class="sidebar-form">
                    <div class="intro-side-form">
                        <?php if( get_field('descricao_contato', 15) ) { ?>
                            <div class="titulo-sidebar">
                                <h3><?= get_field('titulo_contato', 15) ?></h3>
                                <div class="detalhe-svg">
                                    <svg width="338" height="2" viewBox="0 0 338 2" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="338" height="2" fill="#00B0EC"/></svg>
                                </div>
                            </div> 
                            <?= get_field('descricao_contato', 15) ?>
                        <?php } ?>
                    </div>
                    <div class="formulario-contato">
                        <?= do_shortcode('[contact-form-7 id="96d4d4a" title="Formulário de contato"]') ?>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>  


<?php get_footer() ?>