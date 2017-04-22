<!DOCTYPE html>
<html lang="en">

<body>
  
   

    
                <?php    
                session_start();
				include_once "./config.inc.php";
                $target=$_SESSION['modify_bookmark'];
				$target_url=$_SESSION['modify_url'];
				$new_url_name=$_POST['new_url_name'];
				$new_url=$_POST['new_url'];
				
				/*
				echo $_SESSION['modify_bookmark'];
				echo $_SESSION['modify_url'];
				echo $_SESSION['user_no'];
				*/
                 $No=$_SESSION['user_no'];
				 
				 
				 
				 
                // mysql query bookmark list => echo out
                //$query = "SELECT * FROM bookmark WHERE No='$No'";
				$query = "UPDATE `bookmark` SET `Bookmark`='$new_url_name',`URL`='$new_url' WHERE No='$No' AND Bookmark='$target' AND URL='$target_url'";
                $result = mysql_query($query);

				if($result){
					echo ('<script language="JavaScript"> alert("修改成功");</script>');
					header( "location:show.php");
					}
				else{
					echo ('<script language="JavaScript"> alert("修改失敗");</script>');
					//don't get back!
					header("Refresh:0.5; url=\"show.php");
				}
                ?>
            
</body>



</html>