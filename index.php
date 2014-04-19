<meta charset="utf-8">
<!--link rel="stylesheet" type="text/css" href="base.css"-->
<!--link rel="stylesheet" type="text/css" href="gh-buttons.css">
<link rel="stylesheet" type="text/css" href="gh-buttons.css"-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<html>
<ul class="nav nav-pills nav-stacked">
			<div class='btn-group col-lg'>
  				<a href="#" id='save' class="btn btn-primary  btn-xs">保存</a>
				<a href="#" id='upload' class="btn btn-primary  btn-xs">上传文件</a>
				<a href="#" id='edit'    class="btn btn-primary  btn-xs">编辑</a>
				<a href="#" id='exit' class="btn btn-primary  btn-xs">Logout</a>
			</div>
</ul>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<div class='btn-group-vertical col-lg-2'>
				<a href="#" class="btn btn-primary  btn-xs">Inbox</a>
				<a href="#" class="btn btn-primary  btn-xs">用$.post("json")来做测试</a>
			</div>
		</div>

		<div class="span10">
			<div class='col-lg-10'>
				<iframe  id='if' name='if' src="test.htm"   title="可视编辑器 " tabindex="4" width='100%' height='100%'></iframe >
				</div>
		</div>
		
	</div>
</div>



<script type='text/javascript'>
$(function aa()
	{
		window.frames.if.document.designMode='on';
	});
	
	$("#upload").bind("click", function () {
		alert("#upload");
	});
	$("#edit").bind("click", function () {
		window.frames.if.document.designMode='on';
	});
	$("#save").bind("click", function () {
		var filename=$('#if').attr('src');
		window.frames.if.document.designMode='off';
		var tt=$('#if').text();
		  var tt=window.frames.if.document.body.innerHTML
		$.ajax({
		  type: 'POST',
		  url: 'upload.php',
		  //contentType:'multipart/form-data',
		  data: {name:filename,text:tt},
		  success: function(data){
		  alert(data);
		  },
		  dataType: "html"
		});
	});
	
</script>


</html>

