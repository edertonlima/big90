<?php
	
	include 'login_db.php';


	function get_subcategories($category,$parent){
		global $mysqli;
		if($parent == 'null'){
			$parent = 'IS NULL';
		}else{
			$parent = '= '.$parent;
		}

 		$query = "SELECT * FROM `subcategory` WHERE (`id_subcategory_parent` $parent) AND (`id_category` = '$category')";

		$result = $mysqli->query($query);
		while ($row = $result->fetch_object()){
			$object_result[] = $row;
		}

		return $object_result;
	}

	function get_subcategory($slug){
		global $mysqli;
 		$query = "SELECT * FROM `subcategory` WHERE `slug` = '$slug'";
		$result = $mysqli->query($query);
		$row = mysqli_fetch_object($result);
		return $row;
	}



	function get_categories(){
		global $mysqli;
 		$query = "SELECT * FROM `category`";

		$result = $mysqli->query($query);
		while ($row = $result->fetch_object()){
			$object_result[] = $row;
		}

		return $object_result;
	}

	function get_category($slug){
		global $mysqli;
 		$query = "SELECT * FROM `category` WHERE `slug` = '$slug'";
		$result = $mysqli->query($query);
		$row = mysqli_fetch_object($result);
		return $row;
	}

	function get_category_slug($id){
		global $mysqli;
 		$query = "SELECT `slug` FROM `category` WHERE `id` = '$id'";
		$result = $mysqli->query($query);
		$row = mysqli_fetch_object($result);
		return $row;
	}



	function get_posts_subcategory($subcategory){
		global $mysqli;
 		$query = "SELECT * FROM `post` WHERE `subcategory` LIKE '%sub$subcategory%'";
 		//$query = "SELECT * FROM `post` WHERE `id_category` = '$category'";

		$result = $mysqli->query($query);

			while ($row = $result->fetch_object()){
				$object_result[] = $row;
			}

		return $object_result;
	}

	function get_posts($category){
		global $mysqli;
 		$query = "SELECT * FROM `post` WHERE `id_category` = '$category'";

		$result = $mysqli->query($query);

			while ($row = $result->fetch_object()){
				$object_result[] = $row;
			}

		return $object_result;
	}

	function get_post($code){
		global $mysqli;
 		$query = "SELECT * FROM `post` WHERE `code` = '$code'";

		$result = $mysqli->query($query);

			while ($row = $result->fetch_object()){
				$object_result[] = $row;
			}

		return $object_result;
	}

?>