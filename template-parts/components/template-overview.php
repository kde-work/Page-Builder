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
 * COMPONENT IMPLEMENTATION: Overview
 *
 */

global $Mammen;
?>

<div class="component component--<?php echo $Mammen->get_slug(); ?> component--<?php echo $Mammen->get_field( 'Upper gutter' ); ?>">
	<div class="component__heading">
		<?php echo $Mammen->get_field( 'Heading' ); ?>
	</div>

	<div class="component__copy">
		<?php echo $Mammen->get_field( 'Copy' ); ?>
	</div>

	<ul>
	<?php
	$bullets = $Mammen->get_fields( 'Bullet List' );
	if ( count( $bullets ) ) {
		foreach ( $bullets as $bullet ) {
		?>
		<li><?php echo $bullet->get_field( 'Text' ); ?></li>
		<?php
		}
	}
	?>
	</ul>

	<div class="component__cta">
		<a href="<?php echo $Mammen->get_field( 'CTA Button URL' ); ?>" target="_blank"><?php echo $Mammen->get_field( 'CTA Button Text' ); ?></a>
	</div>
</div>