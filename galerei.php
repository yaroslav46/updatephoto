<?
$dub = 'temp/img/';
$scan = scandir($dub);
for ($i=0;$i<=count($scan);$i++){
    if($scan[$i] !=".." and $scan[$i] !="." and $scan[$i] !=""){
  echo "<img style='width: 30%' src='temp/img/$scan[$i]'>";
    }
}

?>