<?php 
	function substr_limit($string, $number, $stop_at_space = false){
		if(!$stop_at_space){
			return substr($string, 0,$number) . ". . .";
		}
	}
?>