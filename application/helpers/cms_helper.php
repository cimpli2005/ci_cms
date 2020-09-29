<?php
function btn_edit($uri)
{
	return anchor($uri, '<i class="fas fa-edit"></i>');
}

function btn_delete($uri)
{
	return anchor($uri, '<i class="fas fa-trash-alt"></i>', array(
		'onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
	));
}

function e($string)
{
	return htmlentities($string);
}

function get_menu($array, $child = FALSE)
{
	$CI =& get_instance();
	$str = '';

	if (count($array)) {
		//$str .= $child == FALSE ? '<li class="nav-item">' . PHP_EOL : '<li class="nav-item dropdown">' . PHP_EOL;

		foreach ($array as $item) {
			if (isset($item['children']) && count($item['children'])) {
				$str .= '<li class="nav-item dropdown">';				
				$str .= '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="' . base_url(e($item['slug'])) . '">' . e($item['title']) . '</a>' . PHP_EOL;
				$str .= '<div class="dropdown-menu"' . PHP_EOL;
				$str .= get_menu($item['children'], TRUE);
				$str .= '</div>' . PHP_EOL;
			} else {
				$str .= '<li class="nav-item">';
				$str .= '<a href="' . base_url(e($item['slug'])) . '" class="nav-link">' . e($item['title']) . '</a>';
			}			

			$str .= '</li>' . PHP_EOL;
		}

		//$str .= '</li>' . PHP_EOL;
	}

	return $str;
}

/**
 * Dump helper. Functions to dump variables to the screen, in a nicley formatted manner.
 * @author Joost van Veen
 * @version 1.0
 */
if (!function_exists('dump')) {
	function dump ($var, $label = 'Dump', $echo = TRUE)
	{
		// Store dump in variable 
		ob_start();
		var_dump($var);
		$output = ob_get_clean();
		
		// Add formatting
		$output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
		$output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';
		
		// Output
		if ($echo == TRUE) {
			echo $output;
		}
		else {
			return $output;
		}
	}
}


if (!function_exists('dump_exit')) {
	function dump_exit($var, $label = 'Dump', $echo = TRUE) {
		dump ($var, $label, $echo);
		exit;
	}
}