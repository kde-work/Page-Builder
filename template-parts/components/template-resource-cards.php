<?php
/**
 * An example implementation of the component in code
 *
 * Using content of component in a custom implementation of the html
 *
 * @author Dmitry
 * @version 0.02
 * @package component
 *
 * COMPONENT IMPLEMENTATION: Resource Cards
 *
 */

global $Mammen;
?>

<div class="component component--<?php echo $Mammen->get_slug(); ?> component--<?php echo $Mammen->get_field( 'Upper gutter' ); ?>">
	<div class="component__heading">
		<?php echo $Mammen->get_field( 'Heading' ); ?>
	</div>
	
	<div class="component__description">
		<?php echo $Mammen->get_field( 'Description' ); ?>
	</div>

	<div class="component__cta">
		<div class="image">
			<img src="<?php echo $Mammen->get_img( 'Icon', 'medium' )[0]['src']; ?>" alt="" class="image-id--<?php echo $Mammen->get_img( 'Icon', 'medium' )[0]['id']; ?>">
		</div>

		<a href="<?php echo $Mammen->get_field( 'PDF Upload' ); ?>" target="_blank"><?php echo $Mammen->get_field( 'CTA Button Text' ); ?></a>
	</div>
</div>