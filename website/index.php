<html>
    <head>
        <title>My Shop</title>
    </head>

    <body>
        <h1>Welcome to test shoping list</h1>
        <h1>This list is called from a python_api on different docker host</h1>
        <ul>
            <?php
            $json = file_get_contents('http://py-service/');
            $obj = json_decode($json);
            $products = $obj->products;
            foreach ($products as $product) {
                echo "<li>$product</li>";
            }
            ?>
        </ul>
    </body>
</html>
