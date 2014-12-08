<?php

$parse = file_get_contents('/var/www/html/json/WA/legislators.tsv');
$delimiter = "\n";
$splitcontents = explode($delimiter, $parse);
foreach ( $splitcontents as $line )
{
    $bits = explode("\t", $line);
    $id = $bits[0];
    $json = json_decode($bits[1]);
    $full_name = $json->full_name;
    $legislator_id = $json->id;
    
    if(isset($json->district)){
 	 	$district = $json->district;
 	 } else { $district = 0; }
 	 
 	 $state = $json->state;
 	 
 	 if(isset($json->party)){
	 	 $party = $json->party;
	 } else { $party = 'null'; }
 	 
 	 if(isset($json->votesmart_id)){
 	 	$votesmart_id = $json->votesmart_id;
 	 } else { $votesmart_id = 0; }
 	 
 	 if(isset($json->chamber)){
	 	 $chamber = $json->chamber;
    } else { $chamber = 'null'; }
    
    echo "$legislator_id $full_name $district $state $party $votesmart_id $chamber \n";
   
    file_put_contents('/var/www/html/json/WA/f_legs.tsv', "$id \t $bits[1] \t $full_name \t $legislator_id \t $district \t $state \t $votesmart_id \t $chamber \n", FILE_APPEND);
    
    }
    
     //remove the last line
   $lines = file('/var/www/html/json/WA/f_legs.tsv');
	array_pop($lines);
	$file = join('',$lines);
	file_put_contents('/var/www/html/json/WA/f_legs.tsv', $file);


?>
