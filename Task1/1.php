<?php
$a=array();
$file_name="c12.csv";
if(($handle=fopen($file_name,"r"))!== FALSE)
{
while(($data=fgetcsv($handle, 0, ","))!== FALSE)
{
 $a[]=$data[0].','.$data[1].','.$data[2].','.$data[3].','.$data[4]
 .','.$data[5].','.$data[6].','.$data[7].','.$data[8];
}
fclose($handle);
echo 'success';
}
$fp=fopen('company123.csv','w');
foreach($a as $i)
{
	fputcsv($fp, array($i), ',', ' ');
}
fclose($fp);
/*
 * End of csvparser.php
 */
?>
