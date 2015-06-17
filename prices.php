<?php
	if(!$fp = fopen("http://adimax.by/melkaya-bitovaya-texnika/kuxonnie-kombaieni.html" ,"r" )) {
		return false;	} 
   
	while(!feof($fp)) {
		$content .= fgets($fp, 1024);	}
	fclose($fp); 
		//var_dump($content);
	
    preg_match_all("/([0-9]*[ ]*[0-9]+[ ][0-9]{3}[ руб.])/", $content, $prices);
    	//echo $prices;//[1][1]."<br />";
	//echo "<pre>"; print_r($prices[0]); echo "</pre>";
echo implode(", ", $prices[0]);
	
?>
