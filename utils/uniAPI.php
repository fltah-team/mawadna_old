<?php

	// INSERT	
function mp_uni_add( $name , $desc){
	global $fp_handle;
	$n_name   = @mysql_real_escape_string(strip_tags($name),$fp_handle);
	$n_desc   = @mysql_real_escape_string(strip_tags($desc),$fp_handle);

	$query = "INSERT INTO `uni` VALUE(NULL ,'$n_name' ,'$n_desc')"; echo $query;
	$qresult = @mysql_query($query);
	if(!$qresult) return false ;
	@mysql_free_result($qresult);
	return true ;
	}
   
	// SELSECT ALL
function mp_uni_get($extra = ''){
	$query = sprintf("SELECT * FROM `uni` %s",$extra);echo $query;
	$qresult = @mysql_query($query);
    if(!$qresult)
       return -1 ; 
	else{
	$rcount = mysql_num_rows($qresult);
       if($rcount == 0 )
       return 0 ;
    }
	$subs = array();
	for($i = 0 ; $i < $rcount ; $i++)
		$subs[@count($subs)] = @mysql_fetch_object($qresult);
		
	@mysql_free_result($qresult);
	return $subs ; 
}

	// SELECT BY ID
function mp_uni_get_by_id($id){
	$uid = (int)$id;
	if($uid == 0) return NULL ;
	$subs = mp_uni_get("WHERE `id` = ".$uid);
	if($subs == NULL) return NULL ;
	$sub = $subs[0];
	return $sub ;
	}

?>