<?php
/**
 * Template part for displaying site info
 *
 * @package Gutener Business
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( get_theme_mod( 'footer_text', '' ) ) ); ?>
	<?php
	printf( esc_html__( 'Gutener Business', 'gutener-business' ) );
	?>
	<?php esc_html_e( 'Theme by', 'gutener-business' ); ?>
	<a href="<?php echo esc_url( __( 'https://keonthemes.com/', 'gutener-business' ) ); ?>" target="_blank">
		<?php
		printf( esc_html__( 'Keon Themes', 'gutener-business' ) );
		?>
	</a>
</div><!-- .site-info -->