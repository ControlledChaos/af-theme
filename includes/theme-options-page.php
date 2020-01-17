<?php
/**
 * Theme options page output
 *
 * @package    WordPress/ClassicPress
 * @subpackage AF_Theme
 * @since      1.0.0
 */

namespace AF_Theme\Includes\Options;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Page title.
$title = sprintf(
	'<h1 class="wp-heading-inline">%1s %2s</h1>',
	get_bloginfo( 'name' ),
	__( 'Display Options', 'af-theme' )
);

// Page description.
$description = sprintf(
	'<p class="description">%1s</p>',
	__( 'This is a starter/example page. Use it or remove it.', 'af-theme' )
);

// Begin page output.
?>

<div class="wrap af-theme-options-page">
	<?php echo $title; ?>
	<?php echo $description; ?>
	<hr />
</div><!-- End .wrap -->