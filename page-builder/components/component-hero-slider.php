<?php
/**
 *
 * The file header and the name of the component
 *
 * Declaration/description of the component
 *
 * @author Dmitry
 * @version 0.0.2
 * @package component
 *
 * COMPONENT BEGIN
 * Name: Hero Slider
 * Thumbnail: /page-builder/assets/img/media-upload--thumb.png *Image for admin panel in Page Builder
 * Preview: /page-builder/assets/img/media-upload--preview.jpg *Relative path from Theme root
 * Global Component Rules: 1 *default 1
 * Slider: GROUP BEGIN
 * Slider OPTION 'type': Repeating Group
 *   Slide Order: Text
 *   Slide Image: Media Upload
 *   Head: OOTO BEGIN
 *     Heading: OOTO TAB
 *     Heading OPTION 'group': Head
 *       Heading Text: Text
 *       Heading Text OPTION 'limited': 100
 *       Heading Text OPTION 'help': Limit 100 characters
 *     Media: OOTO TAB
 *     Media OPTION 'group': Head
 *       Image/Logo: Media Upload
 *   Head: OOTO END
 *   Description: Textarea
 *   Description OPTION 'limited': 250
 *   Description OPTION 'help': Limit 250 characters
 *   CTA: GROUP BEGIN
 *     CTA Button Text: Text
 *     CTA Button Text OPTION 'limited': 100
 *     CTA Button Text OPTION 'help': Limit 100 characters
 *     CTA Button URL: Text
 *   CTA: GROUP END
 * Slider: GROUP END
 * COMPONENT END
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}