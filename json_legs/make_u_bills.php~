<?php

$parse = file_get_contents('/var/www/html/json/WA/u_bills.tsv');
$delimiter = "\n";
$splitcontents = explode($delimiter, $parse);
foreach ( $splitcontents as $line )
{
    $bits = explode("\t", $line);
    $id = $bits[0];
    $json = json_decode($bits[1]);
    $title = $json->title;
    $subjects = $json->subjects;
    $bill_id = $json->bill_id;
    
    echo "$id $title";
    $f_subs = '';
    foreach($subjects as $s){
    $f_subs .= $s . ", ";
    echo " " . $f_subs;
    } 
    echo "$bill_id \n";
   
 file_put_contents('/var/www/html/json/WA/f_u_bills.tsv', "\n $id \t $bits[1] \t $title \t $f_subs \t $bill_id", FILE_APPEND);
    
    
    }
     $filename = '/var/www/html/json/WA/f_u_bills.tsv';
    
function read_and_delete_first_line($filename) {
  $file = file($filename);
  $output = $file[0];
  unset($file[0]);
  array_pop($file);
  file_put_contents($filename, $file);
  return $output;
}

read_and_delete_first_line($filename);

?>
