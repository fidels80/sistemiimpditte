<?php


$ini_array = parse_ini_file("config.ini", true /* will scope sectionally */);
$ext=$ini_array['EXTENSION'];
var_dump($ext);
$search='{';
foreach ($ext['ext'] as $value){

    echo $value . '<br>';
$search=$search  .str_replace('.','',$value).',';
}
$search=$search.'}';
$search=str_replace(',}','}',$search);  
print_r ($search);;
echo '<br>';
print_r('.\\'.$ini_array['percorsi']['oripath'] .'*.'. $search);
var_dump( glob('.\\'.$ini_array['percorsi']['oripath'] .'*.'. $search,GLOB_BRACE));

?>