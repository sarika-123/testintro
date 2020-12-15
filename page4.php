
<?php 
$dir = "H:/Directory-Sarika";


$files = scandir($dir);
foreach ($files as $file) {
    if (strpos('assets', $file) !== false) {
         $a=1;
         break;
    }
    else
    {
    	$a=0;
         
    }
}

if($a==1)
{
echo " folder found";//file found
}
else{
	echo " folder NOT found";
}
?>