<?php
include_once("config.php");
function utf8_encode_all($dat)
{ 
  if (is_string($dat)) return str_replace(array("\n","\r","\t"),'',utf8_encode($dat)) ; 
  if (!is_array($dat)) return str_replace(array("\n","\r","\t"),'',utf8_encode($dat)) ; 
  $ret = array(); 
  foreach($dat as $i=>$d) $ret[$i] = utf8_encode_all($d); 
  return $ret; 
}

function mysql_prep( $value ) {
	$magic_quotes_active = get_magic_quotes_gpc();
	$new_enough_php = function_exists( "mysql_real_escape_string" );
	if( $new_enough_php ) {
		if( $magic_quotes_active ) { $value = stripslashes( $value ); }
		$value = mysql_real_escape_string( $value );
	} else { 
		if( !$magic_quotes_active ) { $value = addslashes( $value ); }
	}
	return $value;
}


function fetch_array($sql){
	$arr = array();
	while($row = @mysql_fetch_assoc($sql)){
		$arr[] = $row;
		}
		return $arr;
	}
?>