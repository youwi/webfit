<meta charset="utf-8">
<!--link rel="stylesheet" type="text/css" href="base.css"-->
<!--link rel="stylesheet" type="text/css" href="gh-buttons.css">
<link rel="stylesheet" type="text/css" href="gh-buttons.css"-->
<link href="css/bootstrap-switch.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/jquery.fileupload.js"></script>
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
				<a href="#" class="btn btn-primary  btn-xs">添加</a>
				<a href="#" class="btn btn-primary  btn-xs">删除</a>
			</div>
		</div>

		<div class="span10">
				<div style="float:right;position: absolute; right:0px; z-index:9999"  >
				<span id='tagop' class="glyphicon glyphicon-list"></span>
					<div class='btn-group'  id='tagedit'>
					<a href="#" id='ckeditor' 	class="btn btn-primary  btn-xs">CKeditor</a>
					<a href="#" id='save' 	class="btn btn-primary  btn-xs">保存</a>
					<a href="#" id='upload' class="btn btn-primary  btn-xs" >上传文件</a>
					<a href="#" id='edit'   class="btn btn-primary  btn-xs">编辑</a>
					<a href="#" id='exit' 	class="btn btn-primary  btn-xs">退出</a>
					</div>
				</div>
			<div class='col-lg-10' width='100%' height='100%'>
				<form  id='file' action='upload.php' method='post'  >
					<input  id='uppc' class='hide'  type='file'  name='files[]'></input>
					<iframe   id='if' name='if' src="test.htm"   title="可视编辑器 " tabindex="4" width='100%' height='100%'></iframe >
				</form>
			</div>
		
		</div>
		
	</div>
</div>



<script type='text/javascript'>


	
	// $("#ckeditor").bootstrapSwitch();
  
	$("#upload").click(function(){
		//alert("#upload");
		$("#uppc")[0].click();
		$("#file").ajaxSubmit();
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
		$.post('upload.php', 	{name:filename,text:window.frames.if.document.body.innerHTML},function(data){ alert(data);});	
	});
	
	var CK;
	$("#ckeditor").click(function(){
		if(CK==null) 
		{
			CK=CKEDITOR.replace('if');
			CK.setData(window.frames.if.document.body.innerHTML) //设置内容
			setTimeout("$('.cke_contents').css('height', $('body').height()-150);",100) ;//设置一个超时对象
		}else{
			window.frames.if.document.body.innerHTML=CK.getData();
			CK.destroy();
			CK=null;
		}
	});
	
		document.onkeydown=function(event){
			  var e=event||window.event;
			  var keyCode=e.keyCode||e.which;
			  if(e.ctrlKey && (keyCode == 83 ))
			  {
				$("#f").submit();
				e.returnValue=false;
			  }
		}


  
    

</script>


</html>

