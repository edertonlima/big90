<?php
	
	include 'config.php';
	include 'db/function_db.php';

	if ($_GET) {
		$url = explode('/', $_GET['url']);
		$current_url =  $url_base.$_GET['url'];
		//var_dump($url);
		//var_dump(count($url));

		if(count($url) == 1){

			// category
			$page = 'category';
			$category = get_category($url[0]);
			$posts = get_posts($category->id);
			//var_dump($category);
			//var_dump($posts);

		}else{
			if(count($url) > 1){

				$code_post = explode('/p/', $_GET['url']);
				if(count($code_post) > 1){
					
					// single
					$page = 'single';				
					$category = get_category($url[0]);
					$posts = get_post($code_post[1]);
					//var_dump($posts);

				}else{

					// subcategory
					$page = 'subcategory';
					$category = get_category($url[0]);
					//$parent_subcategory = $url[count($url) - 2];
					$subcategory = get_subcategory(end($url));
					$posts = get_posts_subcategory($subcategory->id);

				}
			}
		}
	}else{

		// home
		$page = 'front-page';

	}

	//var_dump($page);
	echo '<hr>';
?>

<link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="screen" />

<?php
	include 'menu.php';
	echo '<hr>';
	include $page . '.php';

?>