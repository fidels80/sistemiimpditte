
<?php
class profis
{
function creaditta_File($file,$id=null, $ateco){
$ind=$id;
$ini_array = parse_ini_file("config.ini", true /* will scope sectionally */);
//$ini_xml = parse_ini_file("xml.ini", true /* will scope sectionally */);

$ext = $ini_array['Parametri']['estensione'];
$sep=$ini_array['Parametri']['sep'];
$f = $file;
((is_null($ind) == true) ? $ind = 1 : $ind);
$directory = new DirectoryIterator(dirname(__FILE__));
$di = str_replace('include', '', $directory->getPath());
$file2 = $di . $ini_array['percorsi']['toelab'] . (basename($f));

$fc=$this->build_d0($file2);
//var_dump($fc);
$row=''.$ateco.'-----'.$file.PHP_EOL;

$tlen=600;

    $D0='110';
    $D1='111';
    $D2='112';
    $D3='113';
    $D4='114';
    $D5='115';
    $D6='116';
    $D7='117';
    $D8='118';
    $DP='119';
    $DE='1110';
    $DR='1111';
    $DG='1112';
    $DA='1113';
 


$row=$row.$D0. PHP_EOL;
$row=$row.$D1. PHP_EOL;
$row=$row.$D2. PHP_EOL;
$row=$row.$D3. PHP_EOL;
$row=$row.$D4. PHP_EOL;
$row=$row.$D5. PHP_EOL;
$row=$row.$D6. PHP_EOL;
$row=$row.$D7. PHP_EOL;
$row=$row.$D8. PHP_EOL;
$row=$row.$DP. PHP_EOL;
$row=$row.$DE. PHP_EOL;
$row=$row.$DR. PHP_EOL;
$row=$row.$DG. PHP_EOL;
$row=$row.$DA. PHP_EOL;

 




 

echo $row.'<br></td></tr><tr><td>';
return $row;

}

function build_d0($file)

{
    $t=file_get_contents($file);
    return $t;
}


function build_d1($file)

{
    $t=file_get_contents($file);
   $ris='D1';
   
   $ris=$ris.date('Y');//date('Y-m-d H:i:s') ;//ese
   $ris=$ris.'0101'.date('Y'); //datai
   $ris=$ris.'3112'.date('Y'); //dataf
   $ris=$ris.'   ' ;//cvalu
   $ris=$ris.'00' ;//GestContEntiTerSet
   $ris=$ris.str_pad(' ',528); //blk
   $ris=$ris.'2021.7  '.'A'.PHP_EOL;
   return $ris;
}

function build_d2($file)

{
    $t=file_get_contents($file);
   return $t;
}

function build_d3($file)

{
    $t=file_get_contents($file);
    $ris='D3';
    
    
    
    
    
    $ris=$ris.'2021.7  '.'A'.PHP_EOL;
    return $ris;
}

function build_d4($file)

{
    $t=file_get_contents($file);
    return $t;
}

function build_d5($file)

{
    $t=file_get_contents($file);
    return $t;
}


function build_d6($file)

{
    $t=file_get_contents($file);
    return $t;
}


function build_d7($file)

{
    $t=file_get_contents($file);
    return $t;
}

function build_d8($file)

{
    $t=file_get_contents($file);
    return $t;
}


function build_dp($file)

{
    $t=file_get_contents($file);
    return $t;
}


function build_de($file)

{
    $t=file_get_contents($file);
    return $t;
}

function build_dr($file)

{
    $t=file_get_contents($file);
    return $t;
}

function build_dg($file)

{
    $t=file_get_contents($file);
    return $t;
}

function build_da($file)

{
    $t=file_get_contents($file);
    return $t;
}

}

?>