<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Red8s
 */

?>

	</div><!-- #content -->

  <footer>
    <div class="row footer_links">
      <div class="small-6 medium-3 columns">
        <h3>Title</h3>
        <ul class="footer_menu">
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
        </ul>
      </div>

      <div class="small-6 medium-3 columns">
        <h3>Title</h3>
        <ul class="footer_menu">
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
        </ul>
      </div>

      <div class="small-6 medium-3 columns">
        <h3>Title</h3>
        <ul class="footer_menu">
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
        </ul>
      </div>

      <div class="small-6 medium-3 columns">
        <h3>Title</h3>
        <ul class="footer_menu">
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
          <li><a href="#">Footer Menu Item</a></li>
        </ul>
      </div>
    </div>
    <div class="copyright_section">
    </div>
  </footer>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<script>
	$(document).foundation();
</script>

</body>
</html>
