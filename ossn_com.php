<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */

/**
 * Disable Right Click component initialize
 * 
 * @return void;
 */
function disable_right_click_init() {
	 ossn_extend_view('ossn/js/head', 'js/disable_rightclick');
}
ossn_register_callback('ossn', 'init', 'disable_right_click_init');
