<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ product.name }}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <a href="{{ urlFor('home') }}">На главную</a>
                <div class="jumbotron clearfix">
                    <h1>{{ product.name }}</h1>
                    <div class="col col-md-4">
                        <p>
                            <img class="img-responsive" src="/img/{{ product.img }}" alt="">
                        </p>
                    </div>

                    <div class="col col-md-8">
                        <p>{{ product.description }}</p>
                        <div class="clearfix product-info">
                            <p class="pull-left product-price">Цена: {{ product.price }}0 грн.</p>
                            <p class="pull-right">
                                <a href="{{ product.source }}" target="_blank">Источник</a>
                            </p>
                        </div>
                        <div id="stars" class="starrr" data-rating="{{ product.rating }}"></div>

                        <div class="progress progress-striped active">
                            <div class="progress-bar"></div>
                        </div>

                        <p class="clearfix product-control">
                            <a href="javascript:void(0)" class="btn btn-success btn-lg pull-right">Участвовать</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>