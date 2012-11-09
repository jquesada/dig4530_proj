<?php
function getProductInfo($id, $conn){

	$q = $conn->query("select * from products where id = $id");          
    $q->setFetchMode(PDO::FETCH_OBJ);

    //loop though the results of query and add to array
	while ($product = $q->fetch()) { 
		$productInfo = array(
			"id"    => $product->id,
			"sku"	=> $product->sku,
		    "name"  => $product->name,
		    "desc"  => $product->desc,
		    "price" => $product->price,
		    "image" => $product->image
		);
	}

	return $productInfo;
}

//get all categories associated with a product and return them as an array
function getProductCategories($id, $conn){
	
	$q = $conn->query("select * from categories where product_id = $id");          
    $q->setFetchMode(PDO::FETCH_OBJ);

    //init empty categories array
    $categories = array();

    //loop though the results of query and add to array
	while ($category = $q->fetch()) { 
		array_push($categories, $category->category_name);
	}

	return $categories;		
}

//get all ratings (1-5) for a product and return an average 
function getProductRatingStars($id, $conn){

	$q = $conn->query("select rating from reviews where product_id = $id");          
    $q->setFetchMode(PDO::FETCH_OBJ);

    $ratings = array();

    //loop though the results of query and add to array
	while ($review = $q->fetch()) { 
		array_push($ratings, $review->rating);
	}

	//loop through ratings and determine an average
	$count = count($ratings); 
    foreach ($ratings as $value) {
        $total = $total + $value; 
    }
    $average_rating = ($total/$count); 
 
	return $average_rating;	
}

//get the featured product and return an array of product info
function getFeaturedProduct($conn){

	$q = $conn->query("select * from products where is_featured = 1");          
    $q->setFetchMode(PDO::FETCH_OBJ);

    //loop though the results of query and add to array
	while ($product = $q->fetch()) { 
		$featured = array(
			"id"    => $product->id,
			"sku"	=> $product->sku,
		    "name"  => $product->name,
		    "desc"  => $product->desc,
		    "price" => $product->price,
		    "image" => $product->image
		);
	}

	return $featured;
}