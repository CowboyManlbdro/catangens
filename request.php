<?php

function addUser ($db,  $f, $i, $o, $l, $email, $pass,$exp, $level, $role, $photo){
	$sql= "INSERT INTO users (f,i,o,login,email,password,experience,level,role,photo) VALUES(:f,:i,:o,:login,:email,:password,:experience,:level,:role,:photo)";
	$stmt=$db->prepare($sql);
	// $stmt->bindValue(':hash',$h,PDO::PARAM_STR);
	$stmt->bindValue(':f',$f,PDO::PARAM_STR);
	$stmt->bindValue(':i',$i,PDO::PARAM_STR);
	$stmt->bindValue(':o',$o,PDO::PARAM_STR);
    $stmt->bindValue(':login',$l,PDO::PARAM_STR);
    $stmt->bindValue(':email',$email,PDO::PARAM_STR);
    $stmt->bindValue(':password',$pass,PDO::PARAM_STR);
    $stmt->bindValue(':experience',$exp,PDO::PARAM_INT);
    $stmt->bindValue(':level',$level,PDO::PARAM_INT);
	$stmt->bindValue(':role',$role,PDO::PARAM_STR);
	$stmt->bindValue(':photo',$photo,PDO::PARAM_STR);
	$stmt->execute();
}

function getUser ($db,$login) {
	$db->query( "SET CHARSET utf8" );
	$sql = "SELECT * FROM users
	WHERE login='$login'
	";
	$stmt= $db->prepare($sql);
	$res=$stmt->execute();
	$row=$stmt->fetch(PDO::FETCH_ASSOC); 
	 	$result=$row;
	 return $result;
}

function LoginFree ($db,$l) {
	$db->query( "SET CHARSET utf8" );
	$sql = "SELECT id_u,login FROM users
	WHERE login='$l' 
	";
	$result=array();
	$stmt= $db->prepare($sql);
	$res=$stmt->execute();
	while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	 	$result[$row['id_u']]=$row;
	 }
    if (!empty($result)){
	return false;
    }
    else {
	return true;
    }
}





?>