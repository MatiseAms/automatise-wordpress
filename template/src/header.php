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
<html lang="nl">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<% if (wordpressType === 'normal') { %>
<?php
	$header_menu = get_menu_items_by_registered_slug( 'header_menu' );  // change 'header_menu' if you changed the menu location name
	if (!empty($header_menu)) {
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
<% } %>
