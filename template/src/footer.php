<?php
/**
 * Footer
 *
* @author       <%= author %>
 * @package      Wordpress
 * @subpackage   <%= name %>
 * @version      1.0
 * @since        1.0
 */
?>
<% if (smoothscroll == 'true') { %>
		</main>
	</div>
<% } else { %>
</main>
<% } %>
		<?php	$footer_menu = get_menu_items_by_registered_slug( 'footer_menu' );  // if you rename your footer menu you'll need to rename this one as well  ?>

		<footer class="footer"></footer>

		<?php wp_footer(); ?>
	</body>
</html>
