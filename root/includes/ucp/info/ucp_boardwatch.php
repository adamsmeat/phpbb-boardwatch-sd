<?php
/**
*
* @package ucp
* @version $Id: includes/ucp/info/ucp_boardwatch
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class ucp_boardwatch_info
{
	function module()
	{
		return array(
			'filename'	=> 'ucp_boardwatch',
			'title'		=> 'BOARDWATCH_EDIT_OPTIONS',
			'version'	=> '1.0.4',
			'modes'		=> array(
				'boardwatch'			=> array('title' => 'BOARDWATCH_EDIT_OPTIONS', 'auth' => '', 'cat' => ''),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>