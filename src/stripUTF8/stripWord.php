<?php
/**
 * 中文字符截取
 */
function strip_word($len = 128,$string) {
	$string = strip_tags($string);
	$string = mb_strimwidth($string, 0, $len, '...', 'UTF-8');
	return $string;
}