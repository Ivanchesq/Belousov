<?php require_once 'inc/functions.php';?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<section class="products">
       <div class="container">
           <div class="row">
               <div class="col-md-4 col-sm-6">
                   <div class="card" ">
                       <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
                       <div class="card-body">
                           <h4 class="card-title">Товар 1</h4>
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           <p class="price text-danger">100 рублей</p>
                           <a href="#" class="btn btn-primary buy"data-price="100" data-product="Товар 1">купить</a>
                       </div>
                   </div>
               </div>
                   <div class="col-md-4 col-sm-6">
                       <div class="card" ">
                       <img class="card-img-top" src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
                       <div class="card-body">
                           <h4 class="card-title">Товар 2</h4>
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           <p class="price text-danger">120 рублей</p>
                           <a href="#" class="btn btn-primary buy"data-price="120" data-product="Товар 2">купить</a>
                       </div>
                   </div>
               </div>
    <div class="col-md-4 col-sm-6">
        <div class="card" ">
        <img class="card-img-top" src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Товар 3</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="price text-danger">120 рублей</p>
            <a href="#" class="btn btn-primary buy" data-price="120" data-product="Товар 3">купить</a>
        </div>
    </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card" ">
        <img class="card-img-top" src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Товар 4</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="price text-danger">150 рублей</p>
            <a href="#" class="btn btn-primary buy"data-price="150" data-product="Товар 4">купить</a>
        </div>
    </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card" ">
        <img class="card-img-top" src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Товар 5</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="price text-danger">200 рублей</p>
            <a href="#" class="btn btn-primary buy"data-price="200" data-product="Товар 5">купить</a>
        </div>
    </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card" ">
        <img class="card-img-top" src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
        <div class="card-body">
            <h4 class="card-title">Товар 6</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="price text-danger">999 рублей</p>
            <a href="#" class="btn btn-primary buy"data-price="999" data-product="Товар 6">купить</a>
        </div>
    </div>
    </div>

           </div>
       </div>
</section>

<div class="modal fade"id="cart" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Оформление заказа</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="buy" method="post">
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="name" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
                    </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" name ="email" class="form-control" id="email" placeholder="email" required>

                    </div>

                    <div class="form-group">
                        <label for="product">Выбранный товар</label>
                        <input type="text" name="product" class="form-control" id="product" readonly>

                    </div>
                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input type="text" name ="price" class="form-control" id="price" readonly>

                    </div>
                    <button type="submit" class="btn btn-primary">Купить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>