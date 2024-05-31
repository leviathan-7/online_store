<?php
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GET'){
	if(array_key_exists("product_id", $_GET)){
		// Должно быть возвращение данных о товаре в зависимости от города, в котором зарегистрирован пользователь
		echo json_encode(array(
			'id' => $_GET["product_id"],
			'name' => 'phone samsung A1',
			'price' => 10000
		));
	}
	if(array_key_exists("groups", $_GET)){
		// Должно быть возвращение списка существующих групп
		echo json_encode([array(
			'id' => 0,
			'name' => 'electronics'
		),
		array(
			'id' => 1,
			'name' => 'merch'
		)]);
	}
	if(array_key_exists("group_id", $_GET)){
		// Должно быть возвращение списка существующих категорий в группе $_GET["group_id"]
		echo json_encode([array(
			'id' => 10,
			'name' => 'phones'
		),
		array(
			'id' => 11,
			'name' => 'laptopes'
		)]);
	}
	if(array_key_exists("category_id", $_GET)){
		// Должно быть возвращение списка существующих подкатегорий в категории $_GET["category_id"]
		echo json_encode([array(
			'id' => 20,
			'name' => 'phone samsung'
		),
		array(
			'id' => 21,
			'name' => 'phone honor'
		)]);
	}
	if(array_key_exists("subcategory_id", $_GET)){
		// Должно быть возвращение списка товаров из подкатегории $_GET["subcategory_id"]
		echo json_encode([array(
			'id' => 22,
			'name' => 'phone samsung A1',
			'price' => 10000
		),
		array(
			'id' => 27,
			'name' => 'phone samsung A2',
			'price' => 15000
		)]);
	}
	if(array_key_exists("reserved_products", $_GET)){
		// Должно быть возвращение списка забронированных пользователем товаров
		echo json_encode([array(
			'id' => 22,
			'name' => 'phone samsung A1',
			'price' => 10000,
			'status' => "On the way"
		),
		array(
			'id' => 127,
			'name' => 'TV Toshiba A5',
			'price' => 55000,
			'status' => "In the warehouse"
		)]);
	}
	if(array_key_exists("reserved_product_id", $_GET)){
		// Должен быть забронирован товар $_GET["reserved_product_id"]
		echo json_encode(array(
			'id' => $_GET["reserved_product_id"],
			'name' => 'phone samsung A1',
			'price' => 10000,
			'status' => "Booked"
		));
	}
}





