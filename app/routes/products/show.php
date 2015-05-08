<?php

$app->get('/products/:productId', function($productId) use ($app) {

    $product = $app->db->prepare('
        SELECT
        products.*
        FROM products
        WHERE products.id = :productId
    ');

    $product->execute(['productId' => $productId]);

    $product = $product->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        $app->notFound();
    }

    $app->render('products/show.php', [
        'product' => $product
    ]);

})->name('products.show');