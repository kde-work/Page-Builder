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
 * COMPONENT IMPLEMENTATION: Social Feed Grid
 *
 */

global $Mammen;
?>

<div class="component component--<?php echo $Mammen->get_slug(); ?> component--<?php echo $Mammen->get_field( 'Upper gutter' ); ?>">
	<div class="component__socials">
		<?php echo $Mammen->get_field( 'Facebook API Requirements' ); ?>
		<?php echo $Mammen->get_field( 'Twitter API Requirements' ); ?>
		<?php echo $Mammen->get_field( 'Instagram API Requirements' ); ?>
		<?php echo $Mammen->get_field( 'Google+ API Requirements' ); ?>
	</div>
</div>