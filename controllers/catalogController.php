<?php //echo __FILE__.'<br/>';

if($_action=='catalog' && isset($_id)){

    $category = getCategory($pdo, $_id)[0];
    $products = getProducts($pdo, $_id);

    //use function to add bootstrap
    view('category', ['category' => $category, 'products' => $products]);
}
else {

    $categories = ($pdo->query('SELECT * FROM `categories`'));


    view('catalog', ['categories' => $categories ]);
}
