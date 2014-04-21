<meta charset="utf-8">
<!--link rel="stylesheet" type="text/css" href="base.css"-->
<!--link rel="stylesheet" type="text/css" href="gh-buttons.css">
<link rel="stylesheet" type="text/css" href="gh-buttons.css"-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<html>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<div class='btn-group-vertical col-lg-2'>
				<a href="#" class="btn btn-primary  btn-xs">任务:</a>
				<a href="#" class="btn btn-primary  btn-xs">用$.post("json")来做测试</a>
				<a href="#" class="btn btn-primary  btn-xs">Poster</a>
				<a href="#" class="btn btn-primary  btn-xs">Risk</a>
				<a href="#" class="btn btn-primary  btn-xs">生成目录</a>
				<a href="#" class="btn btn-primary  btn-xs">CKtester</a>
			</div>
		</div>

		<div class="span10">
				<div style="float:right;position: absolute; right:0px; z-index:9999"  >
				<span id='tagop' class="glyphicon glyphicon-list"></span>
				<div class='btn-group'  id='tagedit'>
					<a href="#" id='ckeditor' 	class="btn btn-primary  btn-xs">CKeditor</a>
					<a href="#" id='save' 	class="btn btn-primary  btn-xs">保存</a>
					<a href="#" id='upload' class="btn btn-primary  btn-xs">上传文件</a>
					<a href="#" id='edit'   class="btn btn-primary  btn-xs">编辑</a>
					<a href="#" id='exit' 	class="btn btn-primary  btn-xs">退出</a>
				</div>
					
			
				</div>
			<div class='col-lg-10'>
			
				<iframe  id='if' name='if' src="test.htm"   title="可视编辑器 " tabindex="4" width='100%' height='100%'></iframe >
			</div>
		</div>
		
	</div>
</div>



<script type='text/javascript'>
	
	
	$("#upload").click(function(){
		alert("#upload");
	});
	$("#tagop").click(function(){
		$("#tagedit").slideToggle("slow");
	});
	$("#edit").click(function(){
		window.frames.if.document.designMode='on';
	});
	$("#save").click(function(){
		var filename=$('#if').attr('src');
		window.frames.if.document.designMode='off';
		
		//上传的文件名name
		var tt=window.frames.if.document.body.innerHTML
		$.ajax({
		  type: 'POST',
		  url: 'upload.php',
		  //contentType:'multipart/form-data',
		  data: {name:filename,text:tt},//上传的文件名name加内容
		  success: function(data){
		  alert(data);
		  },
		  dataType: "html"
		});
	});
	$("#ckeditor").click(function(){
		CKEDITOR.appendTo( window.frames.if);
		//var tt=CKEDITOR.replace('if');
	});
</script>


</html>

