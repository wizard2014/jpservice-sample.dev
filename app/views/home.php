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
                <div class="view-control">
                    <div class="well clearfix">
                        <h1 class="pull-left">Продукты</h1>
                        <div class="view-trigger pull-right">
                            <a class="btn btn-success btn-fab btn-raised fa fa-th fa-2x"></a>
                            <a class="btn btn-success btn-fab btn-raised fa fa-list fa-2x"></a>
                        </div>
                    </div>
                </div>

                <div class="masonry active">
                    {% if products is empty %}
                        <p>Пока ничего нет!</p>
                    {% else %}
                        {% for product in products %}
                        <div class="col col-lg-3 col-md-6 box">
                            <div class="jumbotron product clearfix">
                                <div class="product-image first-column">
                                    <p class="text-center">
                                        <a href="{{ urlFor('products.show', {'productId': product.id}) }}">
                                            <img class="img-responsive center-block" src="/img/{{ product.img }}" alt="" width="300px">
                                        </a>
                                    </p>
                                </div>

                                <div class="second-column">
                                    <div class="product-description">
                                        <h2 class="product-name text-center"><a href="{{ urlFor('products.show', {'productId': product.id}) }}">{{ product.name }}</a></h2>
                                        <p>{{ product.description[:100] }}...</p>
                                    </div>

                                    <div class="clearfix product-info">
                                        <p class="pull-left product-price">Цена: {{ product.price }}0 грн.</p>
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
                                </div>

                                <div class="third-column">
                                    <div id="stars" class="starrr" data-rating="{{ product.rating }}"></div>

                                    <p class="clearfix product-control">
                                        <a href="{{ urlFor('products.show', {'productId': product.id}) }}" class="btn btn-primary btn-lg pull-left">Подробно</a>
                                        <a href="javascript:void(0)" class="btn btn-success btn-lg pull-right">Участвовать</a>
                                    </p>
                                </div>
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