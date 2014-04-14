<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="base.css">
<link rel="stylesheet" type="text/css" href="gh-buttons.css">
<link rel="stylesheet" type="text/css" href="gh-buttons.css">

<script type="text/javascript" src="jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="plupload.js"></script>
<html>

  <nav>
		   <ul>
			<li><a href="FrontPage?edit" accesskey="e">Edit</a></li>
		  <li id="add"><a href="FrontPage?new" class="label">Add</a>
		  <ul>
			  <li><a href="FrontPage?new&pageTemplate=.TemplateLibrary.StaticPage">Static Page</a></li>
			  <li><a href="FrontPage?new&pageTemplate=.TemplateLibrary.SuitePage">Suite Page</a></li>
			  <li><a href="FrontPage?new&pageTemplate=.TemplateLibrary.TestPage">Test Page</a></li>
			 </ul>
		 </li>
		 <li id="tools"><a href="#" class="label">Tools</a>
			  <ul>
			 <li><a href="FrontPage?properties" accesskey="p">Properties</a></li>
			   <li><a href="FrontPage?whereUsed" accesskey="w">Where Used</a></li>
			   <li><a href="FrontPage?versions" accesskey="v">Versions</a></li>
			 <li class="divider"><a href="FrontPage?refactor&amp;type=rename">Rename</a></li>
		   <li><a href="FrontPage?refactor&amp;type=move">Move</a></li>
		   <li><a href="FrontPage?refactor&amp;type=replace">Replace</a></li>
		   <li><a href="FrontPage?deletePage">Delete</a></li>
			   <li  class="divider"><a href="/files" accesskey="f">Files</a></li>
			   <li><a href="?searchForm" accesskey="s">Search</a></li>
			   <li><a href="/RecentChanges" accesskey="">Recent Changes</a></li>
		  
			  
			 <li class="divider"><a href=".FitNesse.UserGuide" accesskey="">User Guide</a></li>
			</ul>
		 </li>
		</ul>
  </nav>

<div class="button-group">
    <a href="#" class="button">Dashboard</a>
    <a href="#" class="button">Inbox</a>
    <a href="#" class="button">Account</a>
    <a href="#" class="button">Logout</a>
</div>

<div>
		<iframe  id='if' name='if' src="test.htm"   title="可视编辑器 " tabindex="4" width='50%' height='50%'></iframe >
</div>
<script>
window.frames.if.document.designMode='on';
</script>
<style type="text/css">


</style>
</html>

