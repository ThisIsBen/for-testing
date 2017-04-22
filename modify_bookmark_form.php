
<html>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>   

function check(){
    
	if(modify_bookmark_form.new_url_name.value==""&&modify_bookmark_form.new_url.value=="")
		alert("未填入新書籤名稱及新網址");
	else if(modify_bookmark_form.new_url_name.value=="")
		alert("未填入新書籤名稱");
	else if(modify_bookmark_form.new_url.value=="")
		alert("未填入新網址");
	else
		modify_bookmark_form.submit();
}
function go_back()
{

window.location.href="show.php";

}
</script>
<style>
	#_background {background-image:url('hkt-2.jpg');opacity:0.7;position:absolute;top:15%;left:25%;background-size:cover;height:500px;width:50%;float:left;BACKGROUND-ATTACHMENT:FIXED;}
	#modify {background-color:#FFFFFF;position:absolute;opacity:0.8;top:15%;left:17%;height:450px;width:780px;}
</style>
<body background="snowflake.jpg">
<div id="_background"></div>
<!--
<div id="modify_bookmark" style="border:1;position:absolute;top:15%;left:75%;">
	<h2>修改書籤</h2>
	<form action="modify_bookmark.php" method="post" name="modify_bookmark_form">
	書籤新名稱
	<input type="text" name="new_url_name" placeholder="書籤新名稱" style="width:300px; margin-top:30px" ><br><br><br>
	書籤新網址
	<textarea name="new_url" placeholder="http://" style="width:300px;height:100px;margin-top:15px"></textarea><br>

	
	<input type="button" value="確定" onClick="check()" style="margin-top:15px;">
	</form>
	</div>
	-->
<?php
echo '<div class="container" >
  <h2>修改書籤</h2>
  <form name="modify_bookmark_form" id="modify" class="form-horizontal" role="form" action="modify_bookmark.php" method="post">
  <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label"> 書籤舊名:</label>
      <div class="col-xs-3">
        <input class="form-control" id="disabledInput" type="text" placeholder='.$_GET['id'].' disabled>
      </div>
    </div>
  <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">書籤舊聯結:</label>
      <div class="col-xs-5">
        <input class="form-control" id="disabledInput" type="text" placeholder='.$_GET['url'].' disabled>
      </div>
    </div>
    
    
    <div class="form-group">
		<label class="control-label col-sm-2" for="usr">書籤新名稱:</label>
		<div class="col-xs-3">  
			<input type="text" class="form-control" id="usr" name="new_url_name" placeholder="Enter new bookmark name">
		</div>
    </div>
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" >書籤新網址:</label>
      <div class="col-xs-5">          
        <input type="text" class="form-control" id="email" name="new_url" placeholder="Enter new url">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-success" onClick="check()">Update</button>
		<button type="button" class="btn btn-danger" id="reset" data-dismiss="modal">Cancel</button>
		<button type="button" class="btn btn-warning"  data-dismiss="modal" onclick="go_back()">Go Back</button>
       
	  </div>
    </div>
  </form>
</div>

</body>
</html>'
?>	
<?php
	session_start();
   $_SESSION['modify_bookmark']=$_GET['id'];
   $_SESSION['modify_url']=$_GET['url'];
   ?>
  </body>
</html>