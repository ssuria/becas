<?php

/**
 * The Third Party integration with the Avada plugin.
 *
 * @since		1.1.0
 * @package		LiteSpeed_Cache
 * @subpackage	LiteSpeed_Cache/thirdparty
 * @author		LiteSpeed Technologies <info@litespeedtech.com>
 */
if (!defined('ABSPATH')) {
	die();
}

class LiteSpeed_Cache_ThirdParty_Avada
{

	/**
	 * Detects if Avada is installed.
	 *
	 * @since 1.1.0
	 * @access public
	 */
	public static function detect()
	{
		if (defined('AVADA_VERSION')) {
			add_action('update_option_avada_dynamic_css_posts', 'LiteSpeed_Cache_ThirdParty_Avada::flush');
			add_action('update_option_fusion_options', 'LiteSpeed_Cache_ThirdParty_Avada::flush');
		}
	}

	/**
	 * Purges the cache
	 *
	 * @since 1.1.0
	 * @access public
	 */
	public static function flush()
	{
		LiteSpeed_Cache_Tags::add_purge_tag('*');
	}

}

add_action('litespeed_cache_detect_thirdparty', 'LiteSpeed_Cache_ThirdParty_Avada::detect');


