<?php
/**
 * Plugin Name:       Zynkara Toolkit
 * Plugin URI:        https://zynkaratech.com
 * Description:       Free, open-source toolkit for Bricks Builder. Not affiliated with or endorsed by Bricks Builder.
 * Version:           1.0.0
 * Requires at least: 6.5
 * Requires PHP:      8.1
 * Author:            Amel-Nokoe
 * Author URI:        https://zynkaratech.com
 * Contributors:      zynkara, aetherisinnovate, amel65, kelvinpiousnokoe
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       zynkara-toolkit
 * Domain Path:       /languages
 * Requires Bricks:   1.9
 */
if (!defined('ABSPATH')) exit;
define('ZKT_VERSION', '1.0.0');
define('ZKT_FILE', __FILE__);
define('ZKT_PATH', plugin_dir_path(__FILE__));
define('ZKT_URL', plugin_dir_url(__FILE__));
define('ZKT_BASENAME', plugin_basename(__FILE__));
require_once ZKT_PATH . 'includes/class-helpers.php';
require_once ZKT_PATH . 'includes/class-compatibility.php';
require_once ZKT_PATH . 'includes/class-settings.php';
require_once ZKT_PATH . 'includes/class-loader.php';
register_activation_hook(__FILE__, 'zkt_activate');
function zkt_activate() {
    $defaults = ['zkt_focus_point_enabled'=>'1','zkt_inline_conditions_enabled'=>'1','zkt_newsletter_enabled'=>'0','zkt_newsletter_provider'=>'mailpoet'];
    foreach ($defaults as $k=>$v) { if (get_option($k)===false) add_option($k,$v); }
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, function(){ flush_rewrite_rules(); });
add_action('plugins_loaded', function(){
    load_plugin_textdomain('zynkara-toolkit', false, dirname(ZKT_BASENAME).'/languages');
    ZKT_Settings::instance(); ZKT_Loader::instance();
});
add_action('admin_notices', function(){
    if (!ZKT_Compatibility::bricks_active()) echo '<div class="notice notice-error"><p><strong>Zynkara Toolkit:</strong> '.esc_html__('Bricks Builder theme must be installed and active for this plugin to work.','zynkara-toolkit').'</p></div>';
});
add_filter('plugin_action_links_' . ZKT_BASENAME, function($links){
    $links[] = '<a href="'.esc_url(admin_url('admin.php?page=zynkara-toolkit')).'">'.esc_html__('Settings','zynkara-toolkit').'</a>';
    $links[] = '<a href="https://zynkaratech.com" target="_blank" rel="noopener">'.esc_html__('Visit Zynkara Tech','zynkara-toolkit').'</a>';
    return $links;
});
