<?php

include "Db.php";


function addToBasket($product_item){

}


function removeFromBasket($product_id){

}


function incCount($product_id){

}


function decCount($product_id){


}


if(isset($_POST["p"])){
    $islem = $_POST["p"];

    if($islem == "addToBasket"){
        $id = $_POST["product_id"];

        echo $id;
/*        $product = $db->query("SELECT * FROM products WHERE id={$id}", PDO::FETCH_OBJ)->fetch();
        print_r($product);*/


    } else if($islem == "removeFromBasket"){

    }

            if (isset($_POST['item'])):
                $_SESSION['cart'] = array();
                foreach ($_POST['item'] as $key => $itemID):
                    $_SESSION['cart'][$itemID] = $_POST['qty'][$key];
                endforeach;




}