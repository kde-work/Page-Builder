<?php
/**
 * An example implementation of the component in code
 *
 * Using content of component in a custom implementation of the html
 *
 * @author Dmitry
 * @version 0.01
 * @package component
 *
 * COMPONENT IMPLEMENTATION: Hero Image
 *
 */

// Global Component object
global $Mammen;
?>

<div class="component component--Site-Modal">
	<div>I'm use <b><?php echo $Mammen->get_name(); ?></b></div>
	<div>Upper gutter <b><?php echo $Mammen->get_field( 'Upper gutter' ); ?></b></div>
	<div class="component__image">
		<div class="OOTO">
			<?php
			$heading_text = $Mammen->get_field( 'Heading Text' );
			if ( $heading_text ) {
				?>
				<p><?php echo $heading_text; ?></p>
				<?php
			} else {
				$image = $Mammen->get_img( 'Image/Logo', 'medium' )[0];
				?>
				<img src="<?php echo $image['src']; ?>" alt="" class="image-id--<?php echo $image['id']; ?>">
				<?php
			}
			?>
		</div>

		<div class="component__description">
			<?php echo $Mammen->get_field( 'Description' ); ?>
		</div>

		<div class="component__cta">
			<a href="<?php echo $Mammen->get_field( 'CTA Button URL' ); ?>" target="_blank"><?php echo $Mammen->get_field( 'CTA Button Text' ); ?></a>
		</div>
	</div>
</div>