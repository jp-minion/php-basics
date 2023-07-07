<!DOCTYPE html>
<html>
<head>
  <title>View Products</title>
  <style>
    .product-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f5f5f5;
    }
    .product-container h2 {
      text-align: center;
    }
    .product {
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
    }
    .product h3 {
      margin-top: 0;
    }
    .product p {
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <div class="product-container">
    <h2>View Products</h2>
    <div id="products">
      <?php
      $productsData = file_get_contents('http://localhost/PHP%20basics%20session/ecommerce-api/product/read.php');
      $products = json_decode($productsData, true);

    //   var_dump($products);

      foreach ($products as $product_record) {
        $product = $product_record['records'];
        foreach($product as $record){
            echo '
          <div class="product">
            <h3>' . $record['name']. '</h3>
            <p>Description: ' . $record['description'] . '</p>
            <p>Price: $' . $record['price'] . '</p>
            <p>Category: ' . $record['category_name'] . '</p>
          </div>
        ';
        }
        
      }
      ?>
    </div>
  </div>
</body>
</html>
