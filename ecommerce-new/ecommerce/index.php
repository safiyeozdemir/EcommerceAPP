<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
          crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <title>MAĞAZA</title>
</head>
<body>

<?php
/*
if(!isset ($_SESSION["products"])){

    $_SESSION["products"] = array();

}*/


spl_autoload_register(function ($className) {

    $exploded = explode('\\', $className);

    $namespace = $exploded[0];
    if (count($exploded) === 1) {
        $class = $exploded[0];
    } else {
        $class = $exploded[1];
    }

    if ($namespace === 'App') {
        include $class . '.php';
    } elseif ($namespace === 'Product') {
        include 'Product' . DIRECTORY_SEPARATOR . $class . '.php';
    } elseif ($namespace === 'Payment') {
        include 'Payment' . DIRECTORY_SEPARATOR . $class . '.php';
    } else {
        include $class . '.php';
    }
});

$app = new App\EcommerceApp();

$rawProducts = $app->product->getProductList();
//app bi nesne ve bu nesnenin encapsulation ile bir alt nesnesi oluşmuş ve onun da bir methodu var ve burada o methoda erişiyoruz

$products = [];

foreach ($rawProducts as $product) {
    $product = (object)$product;


    switch ($product->category) {
        case 'cellphone':
            $products[] = new \Product\CellPhone($product);
            break;
        case 'animalFood':
            if ($product->subCategory === 'dog') {
                $products[] = new \Product\DogFood($product);
            } elseif ($product->subCategory === 'cat') {
                $products[] = new \Product\CatFood($product);
            }
            break;
    }
}

include('view/products.php');



/**
 * TODO: Ürünleri listele
 * TODO : Sepete Ekle
 * TODO : Sepeti Listele & Update & Delete İşlemleri
 * TODO : Ürün Detay Sayfası
 */


?>


</body>
</html>

