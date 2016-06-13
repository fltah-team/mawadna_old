<?php
	// INSERT	
function mp_slide_add($name , $sub , $desc , $path){
	global $fp_handle;
	$n_name    = @mysql_real_escape_string(strip_tags($name),$fp_handle);
	$n_sub    = (int)$sub;
	$n_desc    = mysql_real_escape_string(strip_tags($desc),$fp_handle);
	$n_path    = @mysql_real_escape_string(strip_tags($path),$fp_handle);
	$query = ("INSERT INTO `slide` VALUE(NULL,'$n_name','$n_sub','$n_desc',$n_path)");echo $query;
	$qresult = mysql_query($query);
	if(!$qresult) return false ;
	@mysql_free_result($qresult);
	return true ;
	}
    
    /*
     * ------------------------------------------------------
     * ---------------------------------------------------
     * -------------------------------------------------------
     * ---------------------------------------------------
     */
	// SELSECT ALL
function fp_users_get($extra = ''){
        $res = array();
	global $fp_handle ;
	$query = sprintf("SELECT * FROM `employee` %s",$extra);
	$qresult = @mysql_query($query);
	
        if(!$qresult)
            return -1 ; 
	else{
	$rcount = mysql_num_rows($qresult);
        if($rcount == 0 )
            return 0 ;
        }
	
	$users = array();
	
	for($i = 0 ; $i < $rcount ; $i++)
		$users[@count($users)] = @mysql_fetch_object($qresult);
		
	@mysql_free_result($qresult);
	
	return $users ; 
}

        function fp_user_get_num_rows(){
        global $fp_handle ;
	$query = sprintf("SELECT * FROM `employee`");
	$qresult = @mysql_query($query);
	
	if(!$qresult) return -1 ; 
	
        return mysql_num_rows($qresult);
}

	// SELECT BY ID
function fp_users_get_by_id($id){
	$uid = (int)$id;
	if($uid == 0) return NULL ;
	
	$users = fp_users_get("WHERE `id` = ".$uid);
	if($users == NULL) return NULL ;
	$user = $users[0];
	return $user ;
	}
	
	// SELECT BY Username
function fp_users_get_by_username($un){
	//$uun = @mysql_real_escape_string(strip_tags($un),$fp_handle);
	
	$users = fp_users_get("WHERE `username` = '".$un."'");
        
	if($users == NULL) return NULL ;
	$user = $users[0];
	return $user ;
	}
                

	
	// UPDATE
function fp_users_update($id , $name = NULL, $username = NULL, $password = NULL, $type =0){
	global $fp_handle ;
	$uid = (int)$id;
	if($uid == 0) return false ;
	
	$n_type = (int)$type;
	$user = fp_users_get_by_id($uid);
	
	if(!$user)  return false ;
	
	if( (empty($name)) && (empty($username)) && (empty($password)) && ($user->type == $n_type)) 
	return false;
	
	$fields = array();
	$query = "UPDATE `employee` SET ";
	if(!empty($name)){
		$n_name    = @mysql_real_escape_string(strip_tags($name),$fp_handle);
		$fields[@count($fields)] = " `name` = '$n_name' ";
		}
	if(!empty($username)){
		$n_username    = @mysql_real_escape_string(strip_tags($username),$fp_handle);
		$fields[@count($fields)] = " `username` = '$n_username' ";
		}
	if(!empty($password)){
		$n_password    = @md5(mysql_real_escape_string(strip_tags($password),$fp_handle));
		$fields[@count($fields)] = " `password` = '$n_password' ";
		}
	$fields[@count($fields)] = " `id` = '$user->id' ";
	
	$fcount = @count($fields);
	
	if($fcount == 1){
		$query .= $fields[0].' WHERE `id` = '.$uid;
		$qresult = @mysql_query($query);
		if(!$qresult) return false ;
		else return true ;
		}
	for($i = 0 ; $i < $fcount ; $i++){
		$query .= $fields[$i];
		if($i != ($fcount - 1 ))
		$query .= ' , ';
		}
	$query .= ' WHERE `id` = '.$uid; 
	$qresult = @mysql_query($query);
		if(!$qresult) return false ;
                
                @mysql_free_result($qresult);
		return true ;
	
	}
	
	// DELETE
function fp_users_delete($id){
	$uid = (int)$id;
	if($uid == 0) return false ;
	$query = sprintf("DELETE FROM `employee` WHERE `id` = %d",$uid);
	$qresult = @mysql_query($query);
	if(!$qresult) return false ;
	@mysql_free_result($qresult);
	return true ;
	}

	 	

?>