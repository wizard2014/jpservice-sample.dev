<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <title>Все продукты</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        <h1>Продукты</h1>

        {% if products is empty %}
            <p>Пока ничего нет!</p>
        {% else %}
            {% for product in products %}
            <div class="product">
                <h2><a href="{{ urlFor('products.show', {'productId': product.id}) }}">{{ product.name }}</a></h2>
                <p><img src="/img/{{ product.img }}" alt="" width="300px"></p>
                <p>{{ product.description[:100] }}...</p>
                <p>{{ product.price }}</p>
                <p>{{ product.status }}</p>
                <p>{{ product.rating }}</p>
            </div>
            {% endfor %}
        {% endif %}
    </div>
    <script src="/js/app.js"></script>
</body>
</html>