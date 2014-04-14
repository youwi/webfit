<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="base.css">
<script src="jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="lib/jquery.cookie.js" type="text/javascript"></script>
<script src="jquery.treeview.js" type="text/javascript"></script>

<html>


<?php	
header("Content-Type: text/html; charset=utf-8");
function content($pathName,$par=5) {
	static $str="<ul id='navigation' class='treeview'>";
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

$tree = "<div>".content(".",20)."</ul></div>";
$tree=iconv("gbk","utf-8",$tree);
echo $tree;
?>

<script type="text/javascript">
$(document).ready(function(){
 $("#navigation").treeview({
  persist: "location",
  collapsed: true,
  unique: true
 });
});
</script>
<style type="text/css"></style>
</html>

