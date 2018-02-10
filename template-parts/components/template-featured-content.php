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
 * COMPONENT IMPLEMENTATION: Featured Content
 *
 */

global $Mammen;
?>

<div class="component component--<?php echo $Mammen->get_slug(); ?> component--<?php echo $Mammen->get_field( 'Upper gutter' ); ?>">
	<div class="image image-align--<?php echo $Mammen->get_field( 'Image Alignment Option' ); ?>">
		<div class="component__heading">
			<?php echo $Mammen->get_field( 'Heading' ); ?>
		</div>
		<div class="component__copy">
			<?php echo $Mammen->get_field( 'Copy' ); ?>
		</div>
	</div>
</div>