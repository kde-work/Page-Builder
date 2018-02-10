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
 * COMPONENT IMPLEMENTATION: Gallery Multiple
 *
 */

global $Mammen;
?>

<div class="component component--<?php echo $Mammen->get_slug(); ?> component--<?php echo $Mammen->get_field( 'Upper gutter' ); ?>">
	<div class="component__slides">
		<?php
		$images = $Mammen->get_img( 'Image', 'medium' );
		foreach ( $images as $image ) :
			?>
			<img src="<?php echo $image['src']; ?>" alt="" class="image-id--<?php echo $image['id']; ?>">
		<?php endforeach; ?>
	</div>
</div>