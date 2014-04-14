<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="base.css">
<html>


<?php	
header("Content-Type: text/html; charset=utf-8");
function content($pathName,$par=5) {
	static $str="<ul>";
	$parthis=0;
	if($par==0)
	{
		//$str.="</div>";
		return $str;
	}
	if( !is_dir($pathName) || !is_readable($pathName) ){
		return null;
	}
	$allFiles = scandir($pathName);
	foreach($allFiles as $fileName){
		if( in_array($fileName, array('.',".." )) ) continue;
		$fullName = $pathName . '/' . $fileName;
		if( is_dir($fullName) )
		{
			$str .= '<ul id="">';
			$str .= "<a href='". $fullName . "'>".$fileName."</a>";
			content($fullName,$par-1);
			$str .= '</ul>';
		}else{
			//$temp[] = $fileName;
			$str .= "<li><a href='". $fullName . "'  target='_blank'>".$fileName."</a></li>";
		}
	}	
	
	return $str;
}

$tree = "<div>".content(".",20)."</div>";
$tree=iconv("gbk","utf-8",$tree);
echo $tree;
?>
<script>
function showul(var ul)
{
	
}
</script>
<style type="text/css">


</style>
</html>

