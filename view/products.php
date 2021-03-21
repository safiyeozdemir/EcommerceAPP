<h3>Ürünler</h3>
<div class="product_container">


<?php

//echo \Product\Product::getName(3);


/*
print_r($products);
exit();
*/
foreach($products as $product){
    ?>

    <form action="Basket.php" method="post" class="product">
        <h4><?php echo $product->getName($product->getProductId());?></h4>
        <hr />
        <span><?php echo $product->getPrice(). ' '. $product->getCurrency(); ?></span>
        <button type="submit">Sepete Ekle</button>
    </form>


<?php } ?>


</div>