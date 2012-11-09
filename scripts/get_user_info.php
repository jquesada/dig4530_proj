<?php

//get a logged in user's information and return as array
function getUserInfo($id, $conn){

	$q = $conn->query("select * from  users as u 
		left join user_info as i on u.id = i.user_id
		where u.id = '$id'");          
    $q->setFetchMode(PDO::FETCH_OBJ);

    //loop though the results of query and add to array
	while ($user = $q->fetch()) { 
		$userInfo = array(
			"first"    => $user->first,
		    "last" 	   => $user->last,
		    "email"	   => $user->email,
		    "address"  => $user->address,
		    "city" 	   => $user->city,
		    "state"    => $user->state,
		    "zip"	   => $user->zip,
		    "phone"    => $user->phone
		);
	}

	return $userInfo;

}