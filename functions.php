// Remove dashboard widgets
function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal', 'core', 'side' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal', 'core', 'side' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal', 'core', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal', 'core', 'side' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'normal', 'core', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'normal', 'core', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal', 'core', 'side' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal', 'core', 'side' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal', 'core', 'side');//since 3.8
		remove_meta_box( 'dashboard_welcome_panel', 'dashboard', 'normal', 'core', 'side');
		remove_action('welcome_panel', 'wp_welcome_panel');
		remove_action('elementor-message', 'elementor-message');
		
		// oceanwp
		remove_meta_box( 'owp_dashboard_news', 'dashboard', 'normal', 'core', 'side');
		// elementor
		remove_meta_box( 'e-dashboard-overview', 'dashboard', 'normal', 'core', 'side');
		// monsterinsights
		remove_meta_box( 'monsterinsights_reports_widget', 'dashboard', 'normal', 'core', 'side');
		// monsterinsights
		remove_meta_box( 'rank_math_dashboard_widget', 'dashboard', 'normal', 'core', 'side');
		// bbpress
		remove_meta_box( 'bbp-dashboard-right-now', 'dashboard', 'normal', 'core', 'side');
		// yoast seo
		remove_meta_box( 'yoast_db_widget', 'dashboard', 'normal', 'core', 'side');
		// gravity forms
		remove_meta_box( 'rg_forms_dashboard', 'dashboard', 'normal', 'core', 'side');
		// tinypng
		remove_meta_box( 'tinypng_dashboard_widget', 'dashboard', 'normal', 'core', 'side');

}
add_action( 'admin_init', 'remove_dashboard_meta' );

// Desabilitar os Notices de plugins no painel do WordPress
function pr_disable_admin_notices() {
		global $wp_filter;
			if ( is_user_admin() ) {
				if ( isset( $wp_filter['user_admin_notices'] ) ) {
								unset( $wp_filter['user_admin_notices'] );
				}
			} elseif ( isset( $wp_filter['admin_notices'] ) ) {
						unset( $wp_filter['admin_notices'] );
			}
			if ( isset( $wp_filter['all_admin_notices'] ) ) {
						unset( $wp_filter['all_admin_notices'] );
			}
	}
add_action( 'admin_print_scripts', 'pr_disable_admin_notices' );
