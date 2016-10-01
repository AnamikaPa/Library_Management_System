<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$a=array();
$b=array();
$c=array();
$d=array();
$e=array();
$f=0;
	
	$handle= @fopen("bookissue.txt","r");
	$i=0;
		$search= $_POST['book_name'];
		if($handle)
		{
			while(!feof($handle)){
				$buffer=fgets($handle);
				list($a[$i],$b[$i],$c[$i],$d[$i])=split(",",$buffer);
					
				if(strcmp($search,$c[$i])==0||strcmp($search,$d[$i])==-2){
					$e[$j]=$i;
					$j++;
					$f=1;
					break;
					}
				$i++;
			}
			ECHO "<br> <br>";
		}
		if($f==1) header("Location:library book.php");
		else {
	$myFile = "bookissue.txt";
	$fh = fopen($myFile,'a');
	fwrite($fh,"\n");
	$c = implode(",",$_POST);
	fwrite($fh, $c);
	fclose($fh);
	header("Location:success.php");
		}
		
		fclose($handle);
}
?>