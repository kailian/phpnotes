<?php
/**
* 对用户提交信息进行过滤
* @param  string $value  
* @return string $value 
*/
function fliter_script($value) {
	$value = preg_replace("/(javascript:)?on(click|load|key|mouse|error|abort|move|unload|change|dblclick|move|reset|resize|submit)/i","&111n\\2",$value);
	$value = preg_replace("/(.*?)<\/script>/si","",$value);
	$value = preg_replace("/(.*?)<\/iframe>/si","",$value);
	$value = preg_replace ("//iesU", '', $value);
	return $value;
}

function fliter_html($value) {
 	if (function_exists('htmlspecialchars')) return htmlspecialchars($value);
 	return str_replace(array("&", '"', "'", "<", ">"), array("&", "\"", "'", "<", ">"), $value);
}

function fliter_sql($value) {
	 $sql = array("select", 'insert', "update", "delete", "\'", "\/\*", 
	     "\.\.\/", "\.\/", "union", "into", "load_file", "outfile");
	 $sql_re = array("","","","","","","","","","","","");
	 return str_replace($sql, $sql_re, $value);
}

function super_fliter($value){
	$value = fliter_script($value);
	$value = fliter_html($value);
	$value = fliter_sql($value);
	return $value;
}