<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Apparel Prices:</h1>
    <ul>
        <?php 
        
          $json = file_get_contents('http://prices');
          $price_items = json_decode($json);
          foreach ($price_items as $price_item){
            echo " <li>$price_item->price </li>";
          }
        ?>
    </ul>
    <h2>Core Apparel:</h2>
    <ul>
        <?php 
        $json = file_get_contents('http://apparel');
        $apparel_items = json_decode($json);
        foreach ($apparel_items as $apparel_item) {
            echo " <li>$apparel_item->name </li>";

        }
        
        ?>

    </ul>

</body>
</html>