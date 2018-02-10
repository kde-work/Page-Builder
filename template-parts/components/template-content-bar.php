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
 * COMPONENT IMPLEMENTATION: Content Bar
 *
 */

global $Mammen;
?>

<div class="component component--<?php echo $Mammen->get_slug(); ?> component--<?php echo $Mammen->get_field( 'Upper gutter' ); ?>">
    <div class="image image-align--<?php echo $Mammen->get_field( 'Image Alignment Option' ); ?>">
        <img src="<?php echo $Mammen->get_img( 'Image', 'medium' )[0]['src']; ?>" alt="" class="image-id--<?php echo $Mammen->get_img( 'Image', 'medium' )[0]['id']; ?>">
    </div>
	<div class="component__copy">
		<?php echo $Mammen->get_field( 'Copy' ); ?>
	</div>
</div>