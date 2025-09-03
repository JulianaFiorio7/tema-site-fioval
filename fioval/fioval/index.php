<?php
/**
 * O arquivo de modelo da Página Blog
 *
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Dra. Telma Giordani
 * @since Dra. Telma Giordani 1.0
 */
get_header(); ?>

<!-- Imagem de Fundo do cabeçalho -->
<?php 
	if( ! wp_is_mobile() ) {
		$img = get_theme_mod('set_blog_breadcrumb_img_desk');
	} else {
		$img = get_theme_mod('set_blog_breadcrumb_img_mobile');
	}
 ?>

<section id="breadcrumb" style="background-image: url('<?php echo $img; ?>'); background-position: center; background-size: cover; background-repeat: no-repeat;">
	<div class="container-fluid h-100">
		<div class="row h-100">
			<div class="container">
				<div class="row h-100">
					<div class="col-12 d-flex align-items-center">
						<div class="row">
							<div class="col-12">
								<ol itemscope itemtype="https://schema.org/BreadcrumbList">
							 		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
							    		<a itemprop="item" href="<?php echo get_site_url(); ?>"><span itemprop="name">Home</span></a>
							    		<meta itemprop="position" content="1" />
							  		</li>
							  		<span class="marcador">-</span>
							  		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
							    		<a itemprop="item" href="<?php echo get_site_url(); ?>/blog/"><span itemprop="name"><?php the_title(); ?></span></a>
							    		<meta itemprop="position" content="1" />
							  		</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

<div id="paginablog" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h1 class="text-center"><?php echo get_theme_mod('set_single_blog_conteudo_titulo_h1'); ?></h1>
							<p class="col-12 col-md-8 offset-md-2 text-center"><?php echo get_theme_mod('set_single_blog_conteudo_titulo_desc'); ?></p>
						</div>

						<div class="row mt-lg-4">
							<?php 
								$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
								$args = array('post_type' => 'post', 'posts_per_page' => 9, 'paged' => $paged );

				     			$loop = new WP_Query($args);
				     			
				     			if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>
									<div class="col-12 col-lg-4 mb-0 mb-lg-4">
										<a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
											<div class="single">
												<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
												<h2 class="mt-2"><?php the_title(); ?></h2>
												<?php the_excerpt(); ?>
												<div class="btnSingle">
													<p>saiba mais <i class="fas fa-chevron-right"></i></p>
												</div>
											</div>
										</a>						
									</div>
								<?php wp_reset_postdata(); ?>
				        	<?php endwhile; endif; ?>
						</div>

						<!-- Paginação -->
						<div class="row mb-5">
							<div class="container">
								<div class="row">
									<div class="d-flex justify-content-center">
										<div class="pagination align-items-center">
								    		<?php 
								        		echo paginate_links( array(
								            		'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
								            		'total'        => $loop->max_num_pages,
								            		'current'      => max( 1, get_query_var( 'paged' ) ),
								            		'format'       => '?paged=%#%',
								            		'show_all'     => false,
								            		'type'         => 'plain',
								            		'end_size'     => 2,
								            		'mid_size'     => 1,
								            		'prev_next'    => true,
								            		'prev_text'    => sprintf( '<i></i> %1$s', __( '<i class="fas fa-arrow-left"></i>', 'text-domain' ) ),
								            		'next_text'    => sprintf( '%1$s <i></i>', __( '<i class="fas fa-arrow-right"></i>', 'text-domain' ) ),
								            		'add_args'     => false,
								            		'add_fragment' => '',
								        		) );
								    		?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Sidebar -->
			<div class="col-12 col-md-4">
				<div class="row">
					<div class="col-12">
						<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar' ); ?>
						<?php endif; ?>

						<div class="widget-wrapper">
							<h4><?php echo get_theme_mod('set_single_tratamentos_consulta_h4'); ?></h4>
							<p><?php echo get_theme_mod('set_single_tratamentos_consulta_desc'); ?></p>
							<?php echo do_shortcode( get_theme_mod('set_single_tratamentos_consulta_shortcode') ); ?>
                		</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>