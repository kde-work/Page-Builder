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
 * COMPONENT IMPLEMENTATION: Gallery Repeating
 *
 */

global $Mammen;
?>

<div class="component component--<?php echo $Mammen->get_slug(); ?> component--<?php echo $Mammen->get_field( 'Upper gutter' ); ?>">
	<div class="component__slides">
		<?php
		$slides = $Mammen->get_fields( 'Slides' );
		if ( count( $slides ) ) {
			foreach ( $slides as $slide ) {
				?>
				<div class="image">
					<img src="<?php echo $slide->get_img( 'Image', 'medium' )[0]['src']; ?>" alt="" class="image-id--<?php echo $slide->get_img( 'Image', 'medium' )[0]['id']; ?>">
				</div>
				<?php
			}
		}
		?>
	</div>
</div>