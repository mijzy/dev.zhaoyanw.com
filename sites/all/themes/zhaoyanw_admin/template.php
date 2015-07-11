<?php
	function zhaoyanw_admin_preprocess_html(&$variables) {
		$theme_path = drupal_get_path('theme','zhaoyanw_admin');
		drupal_add_css($theme_path . '/css/style.css',
			[
				'group'		=> CSS_THEME,
				'media'		=> 'all',
				'weight'	=> 1000
			]);

	}
?>