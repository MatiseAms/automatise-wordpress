<?php
/**
* Header
*
* @author       Matise (matise.nl)
* @package      Wordpress
* @subpackage   fissa
* @version      1.0
* @since        1.0
*/
?><!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
	<!-- <link rel="manifest" href="/manifest.json"> -->
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php
	$header_menu = get_menu_items_by_registered_slug( 'header_menu' );  // change 'header_menu' if you changed the menu location name
	if (count($header_menu)) {
		$nav = array();
		$children = array();
		$parent_id = '';
		$parent = '';
		$counter = 0;
		//===================
		// Restructure menu array to your liking:
		//===================
		foreach ($header_menu as $menu_item) {
			if ($menu_item->menu_item_parent == 0) {
				array_push($nav, $menu_item);
				if ($parent_id !== $menu_item->ID) {
					$parent_id = $menu_item->ID;
					unset($children); // $children is gone
					$children = array();
				}
				$parent = $counter;
			} else {
				if ($parent_id == $menu_item->menu_item_parent) {
					array_push($children, $menu_item);
					if ($header_menu[$counter + 1]->menu_item_parent == 0 || $counter + 1 == count($header_menu)) {
						$header_menu[$parent]->children = $children;
					}
				}
			}
			$counter++;
		}
		?>
		<header class="header">
			<div class="header__inner">
				<nav class="nav nav--top" aria-label="Top navigation">
					<ul class="nav__list">
						<?php
						foreach ($nav as $item) { ?>
							<li class="nav__item <?php echo isset($item->children) ? 'nav__item--parent' : '' ?>">
								<div class="nav__text-container">
									<a class="nav__link" href="<?php echo $item->url ?>">
										<span class="nav__text"><?php echo $item->title ?></span>
									</a>
									<?php if (isset($item->children)) { ?>
										<div class="nav__arrow" opens="<?php echo $item->ID ?>">
											<?php echo svg('arrow'); ?>
										</div>
									<?php } ?>
								</div>
								<?php
								if (isset($item->children)) { ?>
									<ul class="nav__list nav__list--children" id="<?php echo $item->ID ?>">
										<?php
										foreach ($item->children as $child) {
											?>
											<li class="nav__item">
												<a class="nav__link" href="<?php echo $child->url ?>">
													<span class="nav__text"><?php echo $child->title ?></span>
												</a>
											</li>
											<?php
										}
										?>
									</ul>
								<?php } ?>
							</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</header>
		<?php } ?>
	<main>
