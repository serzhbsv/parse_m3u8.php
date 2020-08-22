<?php
include 'ob.php';
ob_start();
$name='log.txt';
$file='file:///storage/9C33-6BBD/playList.m3u8';
$list=file_get_contents($file);
preg_match_all('|file:///([^\n]+)\n|isU',$list,$arr);
//print_r($arr);
$i=1;
foreach($arr[0] as $v)
{
	copy(trim($v),'file:///storage/9C33-6BBD/video/1/'.$i.'.ts');
	$list=str_replace(trim($v),'file:///storage/9C33-6BBD/video/1/'.$i.'.ts',$list);
	$i++;
}
save($list,'list.m3u8');
$ob=ob_get_contents();

$fp=fopen($name,'w');
fwrite($fp,$ob);
fclose($fp);
ob_end_clean();
print 'ВСе VSE';
?>