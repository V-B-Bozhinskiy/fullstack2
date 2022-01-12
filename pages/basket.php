<?php
$title = 'Корзина';
require_once "../templates/header.php";

$basketProducts = $_SESSION['products'];

//echo '$basketProducts == ';
//var_dump($basketProducts);
//echo '<br>';

$productsIds = array_keys($basketProducts);

//echo '$productsIds == ';
//var_dump($productsIds);
//echo '<br>';

$place_holders = implode(',',array_fill(0,count($productsIds), '?'));

//echo '$place_holders == ';
//var_dump($place_holders);
//echo '<br>';

$query = "SELECT * FROM products WHERE id IN ($place_holders)";
$res = $pdo->prepare($query);
$res->execute($productsIds);

//echo '$res == ';
//var_dump($res);
//echo '<br>';

$products = $res->fetchAll();

//echo '$products == ';
//var_dump($products);
//echo '<br>';
?>

<table class="table table-bordered mt-2">
    <tbody>
        <?php
        foreach ($products as $product) {
            $sum = (float) $basketProducts[$product['id']] * $product['price'];
            echo
            "
            <tr>
                <td>{$product['name']}</td>
                <td>{$product['price']}</td>
                <td>{$basketProducts[$product['id']]}</td>
                <td>{$sum}</td>
            </tr>
            ";
        }
        ?>
    </tbody>
</table> 