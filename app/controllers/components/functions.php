<?php 
	class FunctionsComponent extends Object {
    
    function save_image($inPath,$outPath)
	{ //Download images from remote server
		$in=    fopen($inPath, "rb");
		$out=   fopen($outPath, "wb");
		while ($chunk = fread($in,8192))
		{
			fwrite($out, $chunk, 8192);
		}
		fclose($in);
		fclose($out);
	}
	
	function key() {
		$size = 10;
		$recursive = false;
		$char = "qwertyuiopasdfghjklzxcvbnm1234567890";

		$data = str_split($char);
		$keyfish = '';
		for ( $i = 1 ; $i <= $size ; $i++ )
		{
			$random   = array_rand($data);
			$keyfish .= $data[$random];
			if($recursive===false)unset($data[$random]);
		}
		return $keyfish;
	}
}
?>

