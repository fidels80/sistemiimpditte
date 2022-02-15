
<?php
class profis
{
function creaditta_File($file,$id=null, $ateco){
$ind=$id;
$ini_array = parse_ini_file("config.ini", true /* will scope sectionally */);
//$ini_xml = parse_ini_file("xml.ini", true /* will scope sectionally */);
$ateco=str_pad(str_replace('.','',$ateco),6,' ');
$ext = $ini_array['Parametri']['estensione'];
$sep=$ini_array['Parametri']['sep'];
$f = $file;
((is_null($ind) == true) ? $ind = 1 : $ind);
$directory = new DirectoryIterator(dirname(__FILE__));
$di = str_replace('include', '', $directory->getPath());
$file_ = $di . $ini_array['percorsi']['toelab'] . (basename($f));
//file2 = file_get_contents($file_);
$row='';
if ($file = fopen($file_, "r")) {
    while(!feof($file)) {
        $line =ltrim(rtrim( fgets($file)));
     //  echo $line;
      // echo gettype($line);
      // echo '<br><br>';
        # do same stuff with the $line
        $line2=$line;
            $fc=$this->build_d0($ateco,ltrim(rtrim( fgets($file))));
            $fc=$fc.$this->build_d1($line,$ateco);
            $fc=$fc.$this->build_d2($line,$ateco);
            $fc=$fc.$this->build_d3($line,$ateco);
            $row=$row.$fc; 


    }
    fclose($file);
}

echo $row.'<br></td></tr><tr><td>';
return $row;
}





function build_d0($ateco,$line)
{
     //print_R($line);
    // $ris=$line.'D0'.$ateco.$line;
    isset($line) ? $line :die('la linea del file è vuota!!!');
    $ris='D0'. $ateco  ;
    return $ris.PHP_EOL;
}
function build_d1($line,$ateco)
{
 //   $t=file_get_contents($file);
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
function build_d2($line,$ateco)
{
   // $t=file_get_contents($file);
   $ris='D2';
   $ris=$ris.date('Y');//ese
   $ris=$ris.'00';//atc
   $ris=$ris.str_pad($ateco,6,'0');//cate07
   $ris=$ris.str_pad(' ',5);//cate
   $ris=$ris.str_pad(' ',50);//atdes
   $ris=$ris.str_pad(' ',6);//cpc
   $ris=$ris.'1';//IAAbbAliFis
   $ris=$ris.str_pad(' ',387); //blk
   $ris=$ris.'2021.7  '.'A'.PHP_EOL;
   return $ris;
}
function build_d3($line,$ateco)
{
   // $t=file_get_contents($file);
    $ris='D3';
    $ris=$ris.str_pad('',6,'0');//dit
    $ris=$ris.date('Y');//aiv
    $ris=$ris.date('Y');//ati
    $ris=$ris.str_pad($ateco,6,'0');//cate07
    $ris=$ris.str_pad(' ',5);//cate
    $ris=$ris.str_pad(' ',50);//atdes



    
    
    $ris=$ris.str_pad(' ',359); //blk
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