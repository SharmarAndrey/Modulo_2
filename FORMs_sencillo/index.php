<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



/*************  ✨ Windsurf Command ⭐  *************/
/**
 * Displays a list of files in a given directory, excluding '.' and '..'.
 *
 * @param string $dir The directory path to scan for files.
 */

/*******  9c2ed47c-c09e-4620-bae4-e736399fc164  *******/
function archivos($dir) {
	$files = scandir($dir);
	echo "<ul>";
	foreach ($files as $file) {
		if ($file != "." && $file != "..") {
			echo "<li>$file</li>";
		}
	}
	echo "</ul>";
}
