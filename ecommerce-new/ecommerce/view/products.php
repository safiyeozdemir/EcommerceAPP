<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="products.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <title>Ürünler</title>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-light navbar-light p-0 m-0" style="display: block">
    <!-- Navbar text-->
    <a class="navbar-brand" href="index.php">
        <img src="view/drop.jpg"  alt="" width="85" height="85" >

    </a>

    <ul class="navbar-nav" style="margin-top: 10px;">
        <!--       <li class="nav-item">-->
        <li class="active">
            <a class="navbar-brand mb-0 h1 text-danger" href="index.php" style="font-size: 35px"><p class="font-italic">ÜRÜNLER</p></a>
        </li>
    </ul>

    <ul class="nav navbar-nav bg-light navbar-right">
        <li>
            <a href="Basket.php" style="float: right;
            /* pointer-events: none; cursor: default;*/">
                <span class="glyphicon glyphicon-shopping-cart cart-icon " aria-hidden="true"</span>
                <span class="badge cart-count">1</span>
            </a>
        </li>
    </ul>
</nav>

<!--<h2 class="text-center">Ürün Listesi</h2>-->

<!---<div class="product_container">--->
<div class="container">
    <div class="row">
        <?php

        session_start();


        if(isset($_POST['item'])):
            $_SESSION['products']=array();
        //burada arrayin boyutuna ulaşana kadar diye bir döngü mü kurmak gerekiyor
            foreach($_POST['item'] as $key => $itemID):
                $_SESSION['item'][$itemID] = $_POST['qty'][$key];
            endforeach;
        endif;

            echo "<pre>";
            //print_r($_SESSION['products']);
            echo "</pre>";


        foreach ($products as $product) {
                ?>

            <div class="col-sm-3 col-md-3 kutu">
                <div class="thumbnail">
                    <img id="resimler" src="<?php echo $product->getProductImage($product->getProductId()); ?>"
                         alt="urun resmi">
                    <!--<img src="view/xs.jpg" alt="iphone xs">-->
                    <div class="caption">
                        <form action="Basket.php" method="post" class="product">
                            <h4 class="card-title"><?php echo $product->getName($product->getProductId()); ?></h4>
                            <hr/>
                            <span class="card-text"><p
                                        id="fiyat"><?php echo $product->getPrice() . ' ' . $product->getCurrency(); ?></p></span>
                            <hr/>

                            <button  class="btn btn-outline-primary text-center addToBasketBtn" role="button"><?php $product->getProductId; ?>
                                <span class="glyphicon glyphicon-shopping-cart"></span>Sepete Ekle</button>
                                <script src="js/custom.js"></script>
                        </form>
                    </div>
                </div>
            </div>

   <?php } ?>


    </div>
</div>
<!--         </div>
  </div>

</div> -->


--->


</body>
</html>
