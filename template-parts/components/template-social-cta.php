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
 * COMPONENT IMPLEMENTATION: Social CTA
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

	<div class="component__socials">
		<a href="<?php echo $Mammen->get_field( 'Facebook Profile URL' ); ?>" class="fb" target="_blank"></a>
		<a href="<?php echo $Mammen->get_field( 'Twitter Profile URL' ); ?>" class="tw" target="_blank"></a>
		<a href="<?php echo $Mammen->get_field( 'Instagram Profile URL' ); ?>" class="in" target="_blank"></a>
		<a href="<?php echo $Mammen->get_field( 'Google+ Profile URL' ); ?>" class="gg" target="_blank"></a>
		<a href="<?php echo $Mammen->get_field( 'LinkedIn Profile URL' ); ?>" class="li" target="_blank"></a>
		<a href="<?php echo $Mammen->get_field( 'Pinterest Profile URL' ); ?>" class="pr" target="_blank"></a>
	</div>
</div>