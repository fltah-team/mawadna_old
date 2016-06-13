<?php
	// INSERT	
function mp_sub_add($name , $teacher , $dept , $sem , $desc){
	global $fp_handle;
	$n_name    = @mysql_real_escape_string(strip_tags($name),$fp_handle);
	$n_teacher   =@mysql_real_escape_string(strip_tags($teacher),$fp_handle);
	$n_dept      = @mysql_real_escape_string(strip_tags($dept),$fp_handle);
	$n_sem       = @mysql_real_escape_string(strip_tags($sem),$fp_handle);
	$n_desc      = @mysql_real_escape_string(strip_tags($desc),$fp_handle);

	$query = "INSERT INTO `subject` VALUE(NULL,'$n_name','$n_teacher','$n_dept',$n_sem ,'$n_desc')"; echo $query;
	$qresult = @mysql_query($query);
	if(!$qresult) return false ;
	@mysql_free_result($qresult);
	return true ;
	}
   
	// SELSECT ALL
function mp_sub_get($extra = ''){
	$query = sprintf("SELECT * FROM `subject` %s",$extra);echo $query;
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
function mp_sub_get_by_id($id){
	$uid = (int)$id;
	if($uid == 0) return NULL ;
	$subs = mp_sub_get("WHERE `id` = ".$uid);
	if($subs == NULL) return NULL ;
	$sub = $subs[0];
	return $sub ;
	}

?>