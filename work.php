<?php require_once 'include/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Web application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Рационs питания</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Cards -->
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img src="https://dummyimage.com/400x400/00ffbb/ffffff" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Рацион питания 1</h5>
                        <p class="card-text">Период доставки. Расписание доставки (варианты: ежедневная, доставка через день на один день питания, доставка через день на 2 дня питания). </p>
                        <p class="price text-danger">999.94 RUB </p>
                        <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="999.94" data-product="Рацион питания 1">Купить</button>

                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://dummyimage.com/400x400/00ffbb/ffffff" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Рацион питания 2</h5>
                        <p class="card-text">Период доставки. Расписание доставки (варианты: ежедневная, доставка через день на один день питания, доставка через день на 2 дня питания). </p>
                        <p class="price text-danger">999.95 RUB </p>
                        <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="999.95" data-product="Рацион питания 2">Купить</button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://dummyimage.com/400x400/00ffbb/ffffff" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Рацион питания 3</h5>
                        <p class="card-text">Период доставки. Расписание доставки (варианты: ежедневная, доставка через день на один день питания, доставка через день на 2 дня питания). </p>
                        <p class="price text-danger">999.96 RUB </p>
                        <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="999.96" data-product="Рацион питания 3">Купить</button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://dummyimage.com/400x400/00ffbb/ffffff" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Рацион питания 4</h5>
                        <p class="card-text">Период доставки. Расписание доставки (варианты: ежедневная, доставка через день на один день питания, доставка через день на 2 дня питания). </p>
                        <p class="price text-danger">999.97 RUB </p>
                        <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="999.97" data-product="Рацион питания 4">Купить</button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://dummyimage.com/400x400/00ffbb/ffffff" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Рацион питания 5</h5>
                        <p class="card-text">Период доставки. Расписание доставки (варианты: ежедневная, доставка через день на один день питания, доставка через день на 2 дня питания). </p>
                        <p class="price text-danger">999.98 RUB </p>
                        <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="999.98" data-product="Рацион питания 5">Купить</button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://dummyimage.com/400x400/00ffbb/ffffff" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Рацион питания 6</h5>
                        <p class="card-text">Период доставки. Расписание доставки (варианты: ежедневная, доставка через день на один день питания, доставка через день на 2 дня питания). </p>
                        <p class="price text-danger">999.99 RUB </p>
                        <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="999.99" data-product="Рацион питания 6">Купить</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- //carts -->
    <div class="modal fade" id="cart">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Оформление заказа</h5>
                    <!-- //Close - error -->
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="buy" method="post">
                        <div class="form-group">
                            <label for="surname">Ваша фамилия</label>
                            <input type="name" name="surname" class="form-control" id="surname" placeholder="Ваша фамилия" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Ваше имя</label>
                            <input type="name" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
                        </div>
                        <div class="form-group">
                            <label for="patronymic">Ваше отчество</label>
                            <input type="name" name="patronymic" class="form-control" id="patronymic" placeholder="Ваше отчество" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Ваш номер телефона</label>
                            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Ваш номер телефона" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Ваш Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Ваш Email" required>
                        </div>

                        <div class="form-group">
                            <label for="product">Выбранный рацион питания </label>
                            <input type="text" name="product" class="form-control" id="product" readonly>
                        </div>

                        <!-- <div class="form-group">
                            <label for="date"> Выберие период доставки</label>
                            <input type="date" name="wihtdate" class="form-control" id="date(DATE_RFC822)">
                            <input type="date" name="ondate" class="form-control" id="date(DATE_RFC822)">
                        </div> -->
                        <!-- дни недели питания (с пн по вскр, можно выбрать любое сочетание дней) -->
                        <!-- <div class="form-group">
                            <label for="date"> Выберие дни недели питания</label>
                            <input type="date" name="dateweek" class="form-control" id="date(DATE_RFC822)">
                        </div> -->
                        <!-- комментарий -->
                        <div class="form-group">
                            <label for="text"> Введите комментарий</label>
                            <input type="text" name="text" class="form-control" id="Введите комментарий!">
                        </div>
                        <div class="form-group">
                            <label for="price">Цена выбранного товара </label>
                            <input type="price" name="price" class="form-control" id="price" readonly>
                        </div>

                        <button type="submit" class="btn btn-primary">Купить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>