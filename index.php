<?php
/*
echo '<h1>kendimi şanslı hissediyorum !</h1>';
$users = [
    'halil','ibrahim','samet','gazi','hacı','mahmut','ismail','yılmaz','ömer'
];
echo '<pre>';
print_r($users);
$userCount = count($users);
$luckyPerson = rand(0,$userCount-1);
echo 'şanslı kişi : '.$users[$luckyPerson];
exit();
*/

spl_autoload_register(function ($className) {

    $exploded = explode('\\',$className);

    $namespace = $exploded[0];
    if (count($exploded) === 1){
        $class = $exploded[0];
    } else {
        $class = $exploded[1];
    }

    if ($namespace === 'App'){
        include $class.'.php';
    } elseif ($namespace === 'Product' ){
        include 'Product' . DIRECTORY_SEPARATOR .$class.'.php';
    } elseif ($namespace=== 'Payment' ){
        include 'Payment' . DIRECTORY_SEPARATOR . $class.'.php';
    } else {
        include $class . '.php';
    }
});

$app = new App\EcommerceApp();

$rawProducts = $app->product->getProductList();

$products = [];

foreach($rawProducts as $product){
    $product = (object)$product;
    switch($product->category){
        case 'cellphone':
            $products[] = new \Product\CellPhone($product);
            break;
        case 'animalFood':
            if ($product->subCategory==='dog'){
                $products[] = new \Product\DogFood($product);
            } elseif ($product->subCategory==='cat'){
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

<style>
    .product_container {
        display: flex;
        flex-direction: row;
    }
    .product {
        flex:1;
        border:#ccc solid 1px;
        padding:15px;
        margin:15px;
    }
</style>
