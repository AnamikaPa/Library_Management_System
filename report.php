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
					echo "BOOKS ISSUED FROM LIBRARY";
					for($j=0;$j<$i;$j++)
					{
						echo "<br>" . $c[$j];
					}
					echo "<br>";
					echo "<br>";
					echo "NAME -------> TOTAL BOOKS ISSUED";
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
					echo "<br>".$name . " ------> " . $m ;
					$z=0;
					$m=0;
					}		
		}
?>