<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ product.name }}</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        <a href="{{ urlFor('home') }}">На главную</a>

        <h1>{{ product.name }}</h1>

        <p><img src="/img/{{ product.img }}" alt=""></p>

        <p>{{ product.description }}</p>
        <p>{{ product.price }}</p>
        <p>{{ product.status }}</p>
        <p>{{ product.rating }}</p>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>