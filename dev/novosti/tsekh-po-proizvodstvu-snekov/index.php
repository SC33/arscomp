<?php $title = 'Цех по производству снеков';
$description = 'Новости ОКП &quot;АРС&quot; 8 800 7000 672';
$keywords = '';

$lang = json_decode('{
"h1":"Цех по производству снековой продукции"
}',true);

$root='../../';
$dir=$_SERVER['REQUEST_URI'];
include("../template.php");
?>