<?php
/**
 * Theme Info
 *
 * Adds a simple Theme Info page to the Appearance section of the WordPress Dashboard.
 *
 * @package consulter
 */
/**
 * Add Theme Info page to admin menu
 */
if (!function_exists('consulter_theme_info_menu_link')) {
	function consulter_theme_info_menu_link() {
		// Get theme details.
		$theme = wp_get_theme();
		add_theme_page(
			sprintf( esc_html__( 'Welcome to %1$s %2$s', 'consulter' ), esc_html($theme->display( 'Name' )), esc_html($theme->display( 'Version' )) ),
			esc_html__( 'Consulter Lite', 'consulter' ),
			'edit_theme_options',
			'consulter',
			'consulter_theme_info_page'
		);
	}
	add_action( 'admin_menu', 'consulter_theme_info_menu_link' );
}

/**
 * Display Theme Info page
 */
if (!function_exists('consulter_theme_info_page')) {
	function consulter_theme_info_page() {
		// Get theme details.
		$theme = wp_get_theme();
		?>
		<div class="wrap theme-info-wrap">
			<h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'consulter' ), esc_html($theme->display( 'Name' )), esc_html($theme->display( 'Version' ) )); ?></h1>
			<div class="theme-description"><p><?php echo esc_html($theme->display( 'Description' )); ?></p></div>
			<h2 class="nav-tab-wrapper wp-clearfix">
				<a target="_blank" href="https://media-advertising.co.uk/consulter-theme/" class="nav-tab"><?php echo esc_html__('Free vs PRO', 'consulter'); ?></a>
				<a target="_blank" href="<?php echo esc_url('https://media-advertising.co.uk/consulter/'); ?>" class="nav-tab"><?php echo esc_html__('Live Demo', 'consulter'); ?></a>
				<a target="_blank" href="<?php echo esc_url('https://media-advertising.co.uk/docs/consulter-wp-theme'); ?>" class="nav-tab"><?php echo esc_html__('Documentation', 'consulter'); ?></a>
				<a href="#" class="nav-tab"><?php echo esc_html__('Rate this Theme', 'consulter'); ?></a>
			</h2>
			<div id="getting-started">
				<div class="columns-wrapper clearfix">
					<div class="column column-half clearfix">
						<div class="section">
							<h3 class="title"><?php printf( esc_html__( 'Getting Started with %s', 'consulter' ), esc_html($theme->display( 'Name' )) ); ?></h3>
							<p>
								<a href="https://media-advertising.co.uk/consulter-theme/" target="_blank" class="button button-primary button-hero"><?php esc_html_e( 'Get Consulter PRO now', 'consulter' ); ?></a>
							</p>
						</div>
						<div class="section">
							<h4><?php esc_html_e( 'Theme Options', 'consulter' ); ?></h4>
							<p class="about">
								<?php printf( esc_html__( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'consulter' ), esc_html($theme->display( 'Name' )) ); ?>
							</p>
							<p>
								<a href="<?php echo esc_url(wp_customize_url()); ?>" class="button button-primary"><?php esc_html_e( 'Customize Theme', 'consulter' ); ?></a>
							</p>
						</div>
					</div>
					<div class="column column-half clearfix">
						<img class="screenshot" src="<?php echo esc_url(get_template_directory_uri() . '/images/screenshot.jpg'); ?>" />
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}


if (!function_exists('consulter_activation_notice')) {
	function consulter_activation_notice(){
	    global $pagenow;
	    if ( is_admin() && ( 'themes.php' == $pagenow ) && isset( $_GET['activated'] ) ) {
	        ?> '<div class="updated notice is-dismissible">
	                    <p><?php echo sprintf( esc_html__( 'Welcome! Thank you for choosing Consulter! To fully take advantage of the best our theme can offer please make sure you visit our %1$swelcome page%2$s.', 'consulter' ), '<a href="' . esc_url( admin_url( 'themes.php?page=consulter' ) ) . '">', '</a>' ); ?></p>
	                    <p><a href="<?php echo esc_url( admin_url( 'themes.php?page=consulter' ) ); ?>" class="button"
	                          style="text-decoration: none;"><?php esc_html_e( 'Get started with Consulter', 'consulter' ); ?></a></p>
	                </div> <?php 
	    }
	}
	add_action('admin_notices', 'consulter_activation_notice');
}