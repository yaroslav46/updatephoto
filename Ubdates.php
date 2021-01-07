<?php
require_once 'index.php';
$dub = 'temp/img/';

$tipes =  array( 'image/gif', 'image/png', 'image/jpeg', 'image/svg' );

foreach ($_FILES as $flip){
    $types = $flip['type'];
    $der   = $flip['tmp_name'];
    $name  = $flip['name'];

}
if(isset($_POST['but']) && isset( $_FILES)){
    echo $_FILES['size'];
    echo 'файл загружен'."</br>";
         if (in_array($types, $tipes)){

           $rec = move_uploaded_file($der, $dub.$name);
        }else{
             echo '<h1 style="color: red">Ошибка Разрешенные типы файлов jpeg, png, gif</h1>';
         }
    }

    require "galerei.php";
?>

