function alphabet_order_hard($str) {
	$arr = explode(" ", $str);
	$array_length = count($arr);
	$do_it_again = true;
	while($do_it_again) {
		$do_it_again = false;
		for($i=0; $i < $array_length -1; $i++) {
			if(substr($arr[$i], 0, 1) > substr($arr[$i+1], 0, 1)) {
				$bufer = $arr[$i];
				$arr[$i] = $arr[$i+1];
				$arr[$i+1] = $bufer;
				$do_it_again = true;
			} else if(substr($arr[$i], 0, 1) == substr($arr[$i+1], 0, 1)) {
				if(substr($arr[$i], 0, 2) > substr($arr[$i+1], 0, 2)) {
				$bufer = $arr[$i];
				$arr[$i] = $arr[$i+1];
				$arr[$i+1] = $bufer;
				$do_it_again = true;
				}
			}
		}	
	}
	$result = implode(" ", $arr);
	return $result;
}	