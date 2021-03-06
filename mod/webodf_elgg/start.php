<?php
 /**
 *
 * @package WebODF Integration Elgg
 */

elgg_register_event_handler('init', 'system', 'webodf_elgg_init');

function webodf_elgg_init() {

			global $CONFIG;
elgg_register_page_handler('webodf_elgg','page_handler_webodf_elgg');
	elgg_register_plugin_hook_handler('public_pages', 'walled_garden', 'expages_public_pages');
}
function expages_public_pages($hook, $type, $return_value, $params) {
	$allowed_pages = array();
	$allowed_pages[] = 'webodf_elgg/*.*/*.*';
	return $allowed_pages; 
}
function page_handler_webodf_elgg($page) {
	// Read the URI parameters based on <siteurl>/gdocspreview/param1/param2
	$file_guid = $page[0];
	$timestamp = intval($page[1]); 
	if (isset($timestamp)) {
		// This is a hack, but it works. It will prevent anyone or Google from 
		// storing the public URL to access our private files. There is a 90 
		// second window in which the file is accessible. After that period, 
		// if you try to access the file from the same URL, it will be denied.
		$date = new DateTime();
		$max = $date->format('U') + 90;
		$min = $date->format('U') - 90;
		if (($timestamp > $min) && ($timestamp < $max)) {
			// keep track of the old access level
			$old_access = elgg_get_ignore_access();
			// temporarily make the access level public
			elgg_set_ignore_access(true);
			$file = get_entity($file_guid);
			if (!$file) {
				register_error(elgg_echo("file:downloadfailed"));
				forward();
			}
			$mime = $file->getMimeType();
			if (!$mime) {
				$mime = "application/octet-stream";
			}
			$filename = $file->originalfilename;
			// fix for IE https issue
			header("Pragma: public");
			header("Content-type: $mime");
			if (strpos($mime, "image/") !== false || $mime == "application/pdf") {
				header("Content-Disposition: inline; filename=\"$filename\"");
			} else {
				header("Content-Disposition: attachment; filename=\"$filename\"");
			}
			ob_clean();
			flush();
			readfile($file->getFilenameOnFilestore());
			// restore the access level
			elgg_set_ignore_access($old_access); 
			exit;
		} else {
			register_error(elgg_echo("file:downloadfailed"));
			forward();
		}
	} else {
		register_error(elgg_echo("file:downloadfailed"));
		forward();
	}
}
?>