<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <title>Все продукты</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-md-12">
                <h1>Продукты</h1>
                <div class="masonry">
                    {% if products is empty %}
                        <p>Пока ничего нет!</p>
                    {% else %}
                        {% for product in products %}
                        <div class="col col-lg-3 col-md-6 box">
                            <div class="jumbotron product">
                                <div class="text-center">
                                    <h2><a href="{{ urlFor('products.show', {'productId': product.id}) }}">{{ product.name }}</a></h2>
                                    <p>
                                        <a href="{{ urlFor('products.show', {'productId': product.id}) }}">
                                            <img class="img-responsive center-block" src="/img/{{ product.img }}" alt="" width="300px">
                                        </a>
                                    </p>
                                </div>

                                <p>{{ product.description[:100] }}...</p>

                                <div class="clearfix">
                                    <p class="pull-left">Цена: {{ product.price }}0 грн.</p>
                                    <p class="pull-right">
                                        {% if product.status %}
                                            <span class="text-info">В наличии</span>
                                        {% else %}
                                            <span class="text-danger">Нет в наличии</span>
                                        {% endif %}
                                    </p>
                                </div>

                                <div class="progress progress-striped active">
                                    <div class="progress-bar"></div>
                                </div>

                                <div id="stars" class="starrr" data-rating="{{ product.rating }}"></div>

                                <p class="clearfix">
                                    <a href="{{ urlFor('products.show', {'productId': product.id}) }}" class="btn btn-primary btn-lg pull-left">Подробно</a>
                                    <a href="javascript:void(0)" class="btn btn-success btn-lg pull-right">Участвовать</a>
                                </p>
                            </div>
                        </div>
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>