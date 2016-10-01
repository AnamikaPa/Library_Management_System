<?php
session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$searchitem = implode(",",$_POST);
		$handle = @fopen("data.txt","r");
		if($handle){
			while(!feof($handle)){
				$buffer = fgets($handle);
				
				//preg_replace will remove the space btw words
				$str = preg_replace('/\s++/','',$buffer);
				
				if(strcmp($str,$searchitem)==0){
					session_start();
					$_SESSION["username"] =$_POST["username"];
					$matches = $str;
					header("Location:library book.php");
				}
			}
		}
	}
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$searchitem = implode(",",$_POST);
		$handle = @fopen("admin.txt","r");
		if($handle){
			while(!feof($handle)){
				$buffer = fgets($handle);
				
				//preg_replace will remove the space btw words
				$str = preg_replace('/\s++/','',$buffer);
				if(strcmp($str,$searchitem)==0){
					session_start();

					$matches = $str;
					echo "you r admin...hehe";
					echo "<br>".$str;
					header("Location:admin4.php");
				}
			}
		}
	}
	header("Location:main.php");
?>