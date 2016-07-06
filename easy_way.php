<?php

function alphabet_order_easy($string) {
	$arr = explode(" ", $string);
	sort($arr);
	$result = implode(" ", $arr);
	return $result;
}