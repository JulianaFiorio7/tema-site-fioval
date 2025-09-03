<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

	<head>
	<style>
		#preloader {
			position: fixed;
			top: 0; left: 0;
			width: 100vw;
			height: 100vh;
			background: white;
			z-index: 9999;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.loader {
			border: 6px solid #f3f3f3;
			border-top: 6px solid #01AEF3;
			border-radius: 50%;
			width: 50px;
			height: 50px;
			animation: spin 0.8s linear infinite;
		}
		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
	</style>
    <!-- Define a codificação de caracteres do site -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">

    <!-- Faz o site se ajustar corretamente em dispositivos móveis -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Evita que números de telefone sejam automaticamente formatados como links clicáveis  -->
	<meta name="format-detection" content="telephone=no">

    <!-- Indica que o site segue o padrão XFN -->
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Se o post for singular e os pingbacks estiverem ativados, adiciona um link para permitir que outros sites notifiquem quando linkarem para seu conteúdo. -->
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

    <!-- Chama funções essenciais do WordPress -->
	<?php wp_head(); ?>
	
	</head>

	<body <?php body_class(); ?>>

	<div id="preloader">
		<div class="loader"></div>
	</div>

	<header>
		<nav class="navbar navbar-expand-lg">
			<div class="container">
			<div class="d-none d-lg-flex header-content-desk">
				<div class="header-logo">
					<?php if( get_field('logo_header', 11) )	{ ?>	
						<a href="<?= site_url()?>" name="Home" aria-label="Logo Fioval">
							<img src="<?= get_field('logo_header', 11) ?>" alt="Logo Fioval">
						</a>
					<?php } ?>
				</div>
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
				<!-- Busca -->
				<a class="search-home-bt ml-1" href="#" style="display: block;"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.57225 18.1445C14.3066 18.1445 18.1445 14.3066 18.1445 9.57225C18.1445 4.83793 14.3066 1 9.57225 1C4.83793 1 1 4.83793 1 9.57225C1 14.3066 4.83793 18.1445 9.57225 18.1445Z" stroke="#231F20" stroke-width="1.33594" stroke-linecap="round" stroke-linejoin="round"/> <path d="M15.6338 15.6341L20.5934 20.5938" stroke="#231F20" stroke-width="1.33594" stroke-linecap="round" stroke-linejoin="round"/><title>Buscar no site </title></svg></a>
				<div class="search-menu" style="display: none;">
					<form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
						<label>
							<input type="search" id="input-header-home-busca" class="search-field" placeholder="Pesquisar …" value="" name="s">
							<button type="button" class="search-close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg> </button>	
							<button type="submit" class="search-submit"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.57225 18.1445C14.3066 18.1445 18.1445 14.3066 18.1445 9.57225C18.1445 4.83793 14.3066 1 9.57225 1C4.83793 1 1 4.83793 1 9.57225C1 14.3066 4.83793 18.1445 9.57225 18.1445Z" stroke="#231F20" stroke-width="1.33594" stroke-linecap="round" stroke-linejoin="round"/> <path d="M15.6338 15.6341L20.5934 20.5938" stroke="#231F20" stroke-width="1.33594" stroke-linecap="round" stroke-linejoin="round"/><title>Buscar no site </title></svg></button>
						</label>
					</form>
				</div>
			</div>
			</div>
			<div class="d-flex d-lg-none container-fluid header-content">
				<div class="header-navbar">
					<div class="conteudo-header">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						<div class="header-logo">
							<?php if( get_field('logo_header', 11) )	{ ?>	
								<a href="<?= site_url()?>" name="Home" aria-label="Logo Fioval">
									<img src="<?= get_field('logo_header', 11) ?>" alt="Logo Fioval">
								</a>
							<?php } ?>
						</div>
						<!-- Busca -->
						<a class="search-home-bt ml-1" href="#" style="display: block;"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.57225 18.1445C14.3066 18.1445 18.1445 14.3066 18.1445 9.57225C18.1445 4.83793 14.3066 1 9.57225 1C4.83793 1 1 4.83793 1 9.57225C1 14.3066 4.83793 18.1445 9.57225 18.1445Z" stroke="#231F20" stroke-width="1.33594" stroke-linecap="round" stroke-linejoin="round"/> <path d="M15.6338 15.6341L20.5934 20.5938" stroke="#231F20" stroke-width="1.33594" stroke-linecap="round" stroke-linejoin="round"/><title>Buscar no site </title></svg></a>
						<div class="search-menu" style="display: none;">
							<form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
								<label>
									<input type="search" id="input-header-home-busca" class="search-field" placeholder="Pesquisar …" value="" name="s">
									<button type="button" class="search-close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg> </button>	
									<button type="submit" class="search-submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/></svg> </button>
								</label>
							</form>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto">
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
							
						</ul>
						
					</div>
				</div>
			</div>
		</nav>
	</header>
		
	