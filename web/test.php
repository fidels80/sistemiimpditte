<?php

use Shuchkin\SimpleXLSX;

$vend=str_replace("web","",__DIR__) . 'vendor\shuchkin\simplexlsx\src\SimpleXLSX.php';
require_once( $vend);
var_dump($vend);
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



$xlsx= SimpleXLSX::parse('.\toelab\test_lotto - Copia.xlsx');

//var_dump( $tm->rows(1)) ;

$sheets=$xlsx->sheetNames(); 

foreach($sheets as $index => $name){
  //  echo "Reading sheet :".$name."<br>";
    foreach ( $xlsx->rows($index) as $r => $row ) {
//        print_r($row);
 //       echo "<br>";
    }
}

foreach($xlsx->rows(1) as $r){

    foreach ($r as $value){
echo $value.'      ';
    }
echo '<br>';
}

?>