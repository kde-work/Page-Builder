<?php
/**
 *
 * The file header and the name of the component
 *
 * Declaration/description of the component
 *
 * @author Dmitry
 * @version 0.01
 * @package component
 *
 * COMPONENT BEGIN
 * Name: Site Modal
 * Name OPTION 'Component type': Theme option
 * Thumbnail: /page-builder/assets/img/media-upload--thumb.png *Image for admin panel in Page Builder
 * Preview: /page-builder/assets/img/media-upload--preview.jpg *Relative path from Theme root
 * Global Component Rules: 0 *default 1
 * Image: Media Upload
 * Heading: Text
 * Heading OPTION 'limited': 100
 * Description: Textarea
 * Description OPTION 'limited': 100
 * OOTO (CTA/Newsletter): GROUP BEGIN
 *   CTA: GROUP BEGIN
 *     CTA Button Text: Text
 *     CTA Button Text OPTION 'limited': 100
 *     CTA Button URL: Text
 *     CTA Button URL OPTION 'limited': 100
 *   CTA: GROUP END
 *   Newsletter: GROUP BEGIN
 *     Email Subscribe Field: Text
 *     Email Subscribe Field OPTION 'limited': 100
 *   Newsletter: GROUP END
 * OOTO (CTA/Newsletter): GROUP END
 * COMPONENT END
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * An example implementation of the component in code
 *
 * Using content of component in a custom implementation of the html
 *
 */

// Global Component object
global $Component;
?>

<div class="component component--Site-Modal">
	<div>I'm use <?php echo $Component->getName(); ?></div>
    <div class="OOTO">
	    <a href="<?php echo $Component->getField( 'CTA Button URL' ); ?>" class="cta-btn"><?php echo $Component->getField( 'CTA Button Text' ); ?></a>
    </div>
</div>