<?php 
	function substr_limit($string, $number, $stop_at_space = false){
		if(!$stop_at_space){
			return substr($string, 0,$number) . ". . .";
		}
	}

	// $url should be an absolute url
	function rredirect($url){
	    if (headers_sent()){
	      die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
	    }else{
	      header('Location: ' . $url);
	      die();
	    }    
	}
?>