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
 * COMPONENT IMPLEMENTATION: CTA Section
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
		<a href="<?php echo $Mammen->get_field( 'CTA Button URL' ); ?>" target="_blank"><?php echo $Mammen->get_field( 'CTA Button Text' ); ?></a>
	</div>
</div>