<html>
<head>
</head>
<body>
<center>

<?php
$m=0;
?>
<?php
$a=array();
$b=array();
$c=array();
$d=array();
	$handle= @fopen("tejal.txt","r");
	$i=0;
	$j=0;
	$z=0;
		if($handle)
		{
			
			while(!feof($handle)){
				$buffer=fgets($handle);
				list($a[$i],$b[$i],$c[$i],$d[$i])=split(",",$buffer);
				$i++;	
				}
					echo "<table width=30% border='1'>";
					echo "<tr>";
					echo "<td>","BOOKS ISSUED FROM LIBRARY" , "</td>";
					echo "</tr>";
					for($j=0;$j<$i;$j++)
					{
						echo "<tr>";
						echo "<td>" , $c[$j] , "</td>";
						echo "</tr>";
					}
					echo "</table>";
					echo "<br>";
					echo "<br>";
					echo "<table width=50% border='2'>";
					echo "<tr>";
					echo "<td>" , "NAME" , "</td>";
					echo "<td>" , "TOTAL BOOKS ISSUED" , "</td>";
					ECHO "</tr>";
					for($k=0;$k<$i;$k++){
						$name=$d[$k];
					for($j=0;$j<$i;$j++){
						
						if(strcmp($name,$d[$j])==0 || strcmp($name,$d[$j])==-2)
						{
							$m++;
						}
					}
					if($k>0)
					{
						$k--;
					
					for($l=$k;$l>=0;$l--)
					{
						if(strcmp($name,$d[$l])==0)
						{
							$z=1;
							break;
						}
					}
					$k++;
					}
					if($z==0)
					{
						echo "<tr>";
					echo "<td>" , $name , "</td>";
					echo "<td>" , $m , "</td>";
					echo "</tr>";
					
					}
					$z=0;
					$m=0;
					}		
		}
		echo "</table>";
?>
</center>;
</body>
</html>