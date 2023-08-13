<?php
/**
* Header
*
* @author       <%= author %>
* @package      Wordpress
* @subpackage   <%= name %>
* @version      1.0
* @since        1.0
*/
?><!DOCTYPE html>
<?php 
	$lang = get_bloginfo('language');
	if (function_exists('pll_the_languages')) {
		$lang = pll_current_language();
	}
?>
<html lang="<?=$lang?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<% if (wordpressType === 'normal') { %>
	<?php $header_menu = get_menu_items_by_registered_slug( 'header_menu' );  // change 'header_menu' if you changed the menu location name ?>
	<header class="header">
		<div class="header__inner">
			<nav class="nav nav--top" aria-label="Top navigation">
				<ul class="nav__list">
					<?php if ($header_menu) : ?>
						<?php foreach ($header_menu as $item) : ?>
							<?php
								$target = $item->target ? 'target="_blank" rel="noopener"' : '';
							?>
							<li class="nav__item">
								<div class="nav__text-container">
									<a class="nav__link" href="<?= $item->url ?>" <?=$target;?>>
										<span class="nav__text"><?= $item->title ?></span>
									</a>
								</div>
							</li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</nav>
		</div>
	</header>
<% } %>
<% if (smoothscroll) { %>
	<div data-router-wrapper>
		<div data-router-view="page" <?=body_class();?>>
			<div data-scroll-wrapper data-scroll-content class="smooth-scroll">
				<main data-scroll-container>
<% } else { %>
	<main>
<% } %>
