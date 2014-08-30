<?php

function insertItem() {
	$rows = array(
	  0 => 'MC2013',
	  1 => 'MC2013',
	  2 => 'MC2013',
	  3 => 'MC2013',
	  4 => 'MC2013',
	  5 => 'MC2013',
	  6 => 'MC2013',
	  7 => 'MC2013',
	  8 => 'MC2013',
	  9 => 'MC2013',
	);

	$pop = array(
	  5 => 'MC2014',
	);

	array_splice($rows, 4, 0, $pop);

	var_dump($rows);
}