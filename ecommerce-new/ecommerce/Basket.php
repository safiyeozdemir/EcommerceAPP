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
    <title>SEPETİM</title>
</head>
<body>





<?php

session_start();
echo "<pre>";
//print_r($_SESSION["Basket"]);


?>

<div class="container">
    <h2 class="text-center">Sepetinizde <strong class="color-danger">1 </strong>adet ürün bulunmaktadır.</h2>

</div>


<hr>



<div class="row">
    <div class="col-md-8 col-md-4">
        <table class="table table-hover table-bordered table-striped">
            <thead>
            <th class="text-center">Ürün Resmi</th>
            <th class="text-center">Ürün Adı</th>
            <th class="text-center">Ürün Fiyatı</th>
            <th class="text-center">Ürün Adeti</th>
            <th class="text-center">Toplam</th>
            <th class="text-center">Sepetten Çıkar</th>
            </thead>
            <tbody>
            <tr>
                <td class="text-center" width="120px"><img id="resimler-sepet" src="view/premium.jpg" alt="urun resmi"></td>
            </tr>
            </tbody>
        </table>

    </div>
</div>





</body>
</html>
