<?
function save($arr,$name='data/save.txt')
{
ob_start();
print_r($arr);
$ob=ob_get_contents();

$fp=fopen($name,'w');
fwrite($fp,$ob);
fclose($fp);
ob_end_clean();
}
?>