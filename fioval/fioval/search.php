<?php
/**
 * O arquivo de modelo da página Blog
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Roberta Pansera
 * @since Roberta Pansera 1.0
 */
get_header(); ?>

<section class="breadcrumb">
    <div class="container">
        <a href="<?= site_url() ?>" class="breadcrumb-page">Home</a>
        <span class="breadcrumb-marker">></span>
        <span class="breadcrumb-title">Resultado da Busca</span>
    </div>
</section> 


<section class="produtos-listagem search">
	<div class="container" style="border-bottom: 1px dashed white;">
		<div class="row">
			<div class="titulo-page-search">
				<h2>Resultado da Busca</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="container-grid">
			<?php 
			$contador = 0; // Inicia o contador para calcular o delay

			if( have_posts() ) {
				while( have_posts() ) : the_post(); 
					$tipo = get_post_type();
					if( in_array($tipo, ['produtos', 'produto', 'post']) ) {
						
						// Define o delay progressivo
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
						wp_reset_postdata();
					}
				endwhile;
			} else { 
				echo '<div class="col-12 page-search-error"><p> Nenhum postagem encontrada </p></div>'; 
			}
			?>

		</div>
	</div>
</section>

<?php get_footer(); ?>