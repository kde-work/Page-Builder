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
 * COMPONENT IMPLEMENTATION: Card Grid
 *
 */

global $Mammen;
?>

<div class="component component--<?php echo $Mammen->get_slug(); ?> component--<?php echo $Mammen->get_field( 'Upper gutter' ); ?>">
	<div class="component__card">
		<?php
		$cards = $Mammen->get_fields( 'Card' );
		if ( count( $cards ) ) {
			foreach ( $cards as $card ) {
				?>
                <div class="image">
                    <img src="<?php echo $card->get_img( 'Image', 'medium' )[0]['src']; ?>" alt="" class="image-id--<?php echo $card->get_img( 'Image', 'medium' )[0]['id']; ?>">
                </div>

                <div class="component__heading">
					<?php echo $card->get_field( 'Heading' ); ?>
                </div>

                <div class="component__description">
					<?php echo $card->get_field( 'Description' ); ?>
                </div>

                <div class="component__colored-text">
					<?php echo $card->get_field( 'Highlighted Text (colored)' ); ?>
                </div>

                <div class="component__ctas">
                    <div class="component__cta component__cta--1">
                        <a href="<?php echo $card->get_field( 'CTA 1 Button URL' ); ?>"><?php echo $card->get_field( 'CTA 1 Button Text' ); ?></a>
                    </div>
                    <div class="component__cta component__cta--2">
                        <a href="<?php echo $card->get_field( 'CTA 2 Button URL' ); ?>"><?php echo $card->get_field( 'CTA 2 Button Text' ); ?></a>
                    </div>
                </div>
				<?php
			}
		}
		?>
	</div>
</div>