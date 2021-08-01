

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Shoping Cart</title>
</head>
<body>
    <div class="container">
        <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="index.php" method="post">
                    <div class="card shadow">
                        <div>
                            <img src="./upload/product1.jpg" alt="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Product 1
                            </h5>
                            <h6>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </h6>
                            <p class="card-text">
                                CoffeeBook Laptop
                            </p>
                            <h5>
                                <small><s class="text-secondary">$2999.99</s></small>
                                <span class="price">$999.99</span>
                            </h5>

                            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="index.php" method="post">
                    <div class="card shadow">
                        <div>
                            <img src="./upload/product2.jpg" alt="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Product 2
                            </h5>
                            <h6>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </h6>
                            <p class="card-text">
                                BlackShire Headset for gaming
                            </p>
                            <h5>
                                <small><s class="text-secondary">$1999.99</s></small>
                                <span class="price">$799.99</span>
                            </h5>

                            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="index.php" method="post">
                    <div class="card shadow">
                        <div>
                            <img src="./upload/product3.jpg" alt="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Product 3
                            </h5>
                            <h6>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </h6>
                            <p class="card-text">
                                TPhone 11
                            </p>
                            <h5>
                                <small><s class="text-secondary">$3999.99</s></small>
                                <span class="price">$899.99</span>
                            </h5>

                            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>