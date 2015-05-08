<?php

$app->get('/', function() use ($app) {

    $products = $app->db->query('
        SELECT
        products.*
        FROM products
    ')->fetchAll(PDO::FETCH_ASSOC);

    $app->render('home.php', [
        'products' => $products
    ]);

})->name('home');