<?php

require("connect.php");

class droute{
	function get_all_staff_picks(){
		global $con;
		$query = "SELECT * FROM routes LEFT JOIN routes_staffpicks ON routes_staffpicks.routes_id = routes.id 
										LEFT JOIN categories ON categories.id = routes.category ";
		$result = mysqli_query($con, $query);
		//print_r($result);
		if($result){
			$arr = array();
			$arr2 = array();
			while($row = mysqli_fetch_array($result)){
				$arr['id']= $row['routes_id'];
				$arr['route_name']= $row['route_name'];
				$arr['category_name']=  $row['category_name'];
				$arr['add_date']=  $row['add_date'];
				$arr['thumb'] = $row['thumb'];
				$arr2 []= $arr;
			}
			//print_r($arr2);
			return $arr2;
			
		}
	}

	function get_route_media(){
		global $con;
		$query = "SELECT * FROM route_media LEFT JOIN routes ON route_media.rid = routes.id 
										LEFT JOIN categories ON categories.id = routes.category ";
		$result = mysqli_query($con, $query);
		if($result){
			$arr = array();
			$arr2 = array();
			while($row = mysqli_fetch_array($result)){
				$arr['id']= $row['rid'];
				$arr['route_name']= $row['route_name'];
				$arr['category_name']=  $row['category_name'];
				$arr['date']=  $row['date_of_creation'];
				$arr['thumb'] = $row['thumb'];
				$arr['text_info'] = $row['info'];
				$arr2 []= $arr;
			}
			print_r($arr2);
			return $arr2;
			
		}
	} 

}


$db = new droute();

$db -> get_route_media();


?>