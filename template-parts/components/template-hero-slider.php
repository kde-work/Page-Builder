<?php
/**
 * An example implementation of the component in code
 *
 * Using content of component in a custom implementation of the html
 *
 * @author Dmitry
 * @version 0.01
 * @package component
 *
 * COMPONENT IMPLEMENTATION: Hero Slider
 *
 */

// Global Component object
global $Mammen;
?>

<div class="component component--Site-Modal">
<div>I'm use <b><?php echo $Mammen->get_name(); ?></b></div>
<div>Upper gutter <b><?php echo $Mammen->get_field( 'Upper gutter' ); ?></b></div>
<div class="component__slider">
    <?php
    $slider = $Mammen->get_fields( 'Slider' );
    if ( count( $slider ) ) {
        foreach ( $slider as $slide ) {
            ?>
            <div class="slide">
                <h3><?php echo $slide->get_field( 'Slide Order' ); ?></h3>
                <?php
                $images = $slide->get_img( 'Slide Image', 'medium' );
                foreach ( $images as $image ) :
                ?>
                    <img src="<?php echo $image['src']; ?>" alt="" class="image-id--<?php echo $image['id']; ?>">
                <?php endforeach; ?>

                <div class="OOTO">
                    <?php
                    $heading_text = $slide->get_field( 'Heading Text' );
                    if ( $heading_text ) {
                        ?>
                        <p><?php echo $heading_text; ?></p>
                        <?php
                    } else {
                        $image = $slide->get_img( 'Image/Logo', 'medium' )[0];
                        ?>
                        <img src="<?php echo $image['src']; ?>" alt="" class="image-id--<?php echo $image['id']; ?>">
                        <?php
                    }
                    ?>
                </div>
                <p><?php echo $slide->get_field( 'Description' ); ?></p>
                <p>
                    <a href="<?php echo $slide->get_field( 'CTA Button URL' ); ?>" class="cta-btn"><?php echo $slide->get_field( 'CTA Button Text' ); ?></a>
                </p>
            </div>
            <?php
        }
    }
    ?>
</div>
</div>