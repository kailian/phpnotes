<?php

/**
 * 将多个空格替换为一个
 */
function str_space( $string ) {
	$string = preg_replace("/\s(?=\s)/","\\1",$string);
	return $string;
}
