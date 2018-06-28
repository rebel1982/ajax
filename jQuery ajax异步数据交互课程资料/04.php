<?php 


if ($_POST['cid']=='88') {
	$arr =  array(
		0 => array(
			'name' =>'name' ,
			'age' =>'name' ,
			'sex' =>'name' ,
			'address' =>'name' 
			 ),
		1 => array(
			'name' =>'name' ,
			'age' =>'name' ,
			'sex' =>'name' ,
			'address' =>'name' 
			 ),
		2 => array(
			'name' =>'name' ,
			'age' =>'name' ,
			'sex' =>'name' ,
			'address' =>'name' 
			 ),
	);
}


echo json_encode($arr);
?>