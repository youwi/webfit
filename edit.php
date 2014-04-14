




<form method="post" action="$resource" name="f" id='f'>
 <fieldset id="editor">
  <textarea  id="pageContent" name="pageContent" wrap="off">$pageContent</textarea>
 </fieldset>

 <fieldset id="save_buttons">
  <input type="submit" name="save" value="Save" accesskey="s"/>
  <a class="button" href="
  
  <input type="button" value="wysiwyg" onclick='s_ckeditor()'/>
  <input type="button" value="indent "   onclick='fit_indent()'/>
 </fieldset>
</form>



<script>
document.onkeydown=function(event){
  var e=event||window.event;
  var keyCode=e.keyCode||e.which;
  if(e.ctrlKey && (keyCode == 83 ))
  {
	$("
	e.returnValue=false;
  }

}

  if(!String.repeat )//判断是否存在这个方法
  {					
    String.prototype.repeat = function(l)
		{//创建repeat方法
			return new Array(l+1).join(this);//创建元素值为空、个数为重复次数+1的数组，用字符串自身做为分隔符连接起来，返回连接后的值。
		}
    }

 function  len(s)
     {
		var l = 0;
		var a = s.split("");
		for (var i=0;i<a.length;i++) {
			if (a[i].charCodeAt(0)<299) {
					l++;
			} else {
				l+=2;
			}
		}
			return l;
	}

  function  fit_indent()
  {
	var textarea=$("
	var text=textarea.value;
    var table_item;

    table_item=text.split("|");
    var max_length=0;
    for(var i=0;i<table_item.length;i++)
    {
		if(len(table_item[i])>max_length)
			max_length=len(table_item[i]);
    }
    for(var i=1;i<table_item.length;i++)
    {
	    if(table_item[i]=="\n") 
			continue;
		if(table_item[i].match(/^\s*$/))
		{
			table_item[i]=" ".repeat(max_length);
			continue;
		}
		if(len(table_item[i])<max_length)
		{
			var temp_length=max_length-len(table_item[i]);
			if(temp_length>30) temp_length=30;
			table_item[i]+=" ".repeat(temp_length);
		}
    }
    text=table_item[0];
    for(var i=1;i<table_item.length;i++)
    {
		text+="|"+table_item[i];
    }
    text+="\n";
    
    textarea.value=text;

  }

</script>

