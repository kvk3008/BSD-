<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'ECBC'); 
define('DB_USER','root'); 
define('DB_PASSWORD','zgcjkdr8'); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
/* $ID = $_POST['user']; $Password = $_POST['pass']; */ 
function SignIn() 
{
	session_start(); 
	//starting the session for user profile page 
	if(!empty($_POST['user'])) 
	//checking the 'user' name which is from Sign-In.html, is it empty or have some text 
	{ 
		$query = mysql_query("SELECT * FROM users where username = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error()); 
		$row = mysql_fetch_array($query) or die(mysql_error());
		echo $row;
		if(!empty($row['username']) AND !empty($row['password']))
		{ 
			$_SESSION['user'] = $row['username']; 
		//	$_SESSION['pass'] = $row['pass']; 
			// echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
			header('Location:index.html');
		} 
		else
		{ 
		// 	echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
		//	console.log("not");
		//	session_destroy();
			header('Location:login.html');
		}
	}
	else
	{
			header('Location:login.html');
	}
}
if(isset($_POST['submit'])) 
{ 
	SignIn();
}
?>
