<?php
echo $_GET['file'];
try {
	$cwd = getcwd();
    $receipt = array(); 
	chdir("ocr");
    exec("tesseract.exe ../../uploads/".$_GET['file']." ../../text/".$_GET['file']." 2>&1 ", $receipt);
    var_export($receipt);
} catch (Exception $e) {
    echo $e;
}
chdir($cwd);

$lines = file("../text/".$_GET['file'].".txt");
foreach ($lines as $line_num => $line) {
	if($line_num == 0){
		$inc["name"] = $line;
	}
	
	if(strpos($line, 'Date') !== false){
		$pos = strpos($line, 'Date');
		$pos += 4;
		for($i = $pos; $i < strlen($line); $i++){
			if(is_numeric($line[$i])){
				if($line[$i] != " "){
					$j = $i;
					while(is_numeric($line[$j]) || $line[$j] == "/" || $line[$j] == "-") {
						if($line[$j] == " " || !isset($line[$j])){
							break;
						}
						$j++;
						$end = $j;
					}
					if($j == $i){
						echo "Full";
						$date = substr($line, $i);
						$inc["date"] = $date;
						$inc["date"] = str_replace("\\","",$inc["date"]);
						$inc["date"] = str_replace("\\","",$inc["date"]);
						$adjDate = explode("-", $inc[date]);
						$inc["date"] = $adjDate[2].$adjDate[0].$adjDate[1];

					}else{
						$date = substr($line, $i, ($j - $i));
						$inc["date"] = $date;
						$inc["date"] = str_replace("/","-",$inc["date"]);
						$adjDate = explode("-", $inc["date"]);
						
						if(strlen($adjDate[2]) == 2){
							$adjDate[2] = "20".$adjDate[2];
						}
						$inc["date"] = $adjDate[2]."-".$adjDate[0]."-".$adjDate[1];
					}
					break;
				}
			}
		}
	}

	echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";

}
	echo $inc["name"];
	echo $inc["date"];
	header("Location: ../form.php?name=".urlencode($inc['name'])."&date=".urlencode($inc['date']));

?>