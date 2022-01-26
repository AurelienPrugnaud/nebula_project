<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nebula cart page</title>
    <link rel="stylesheet" href="/assets/public/css/style.min.css">
</head>

<body>

    <! -- //////////////////////////////HEADER START//////////////////////////////////////// -->
        <?php include("../modules/header.php") ?>

        <! -- //////////////////////////////HEADER END//////////////////////////////////////// -->

            <! -- //////////////////////////////MAIN START//////////////////////////////////////// -->
                <main class="container white-page">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="border-card2 mb-3">
                                <div class="card-game2">
                                    <div class="d-flex align-items">
                                        <div>
                                            <img class="img-cart me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-column justify-content-between">
                                                <div>
                                                    <span class="right-card-game">God Of War</span>
                                                    <p class="left-card-game">Disponible le 14/01/2022</p>
                                                </div>
                                                <div>
                                                    <img class="logo-pegi" src="../assets/img/games/pegi18.png" alt="">
                                                    <span class="left-card-game">PEGI 18</span><br>
                                                    <span class="iconify" data-icon="ant-design:windows-filled" style="color: white;"></span>
                                                </div>  
                                            </div>
                                            <div class="d-flex flex-column justify-content-between text-end right-ml-cart-card">
                                                <p class="right-card-game">49,99 €</p>
                                                <p class="left-card-game">Retirer du panier</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-card2 mb-3">
                                <div class="card-game2">
                                    <div class="d-flex align-items">
                                        <div>
                                            <img class="img-cart me-3" src="/assets/img/games/Kena_BOS_GameArt.jpg" alt="god of war">
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-column justify-content-between">
                                                <div>
                                                    <span class="right-card-game">Kena: Bridges of Spirit</span>
                                                </div>
                                                <div>
                                                    <img class="logo-pegi" src="../assets/img/games/pegi12.png" alt="">
                                                    <span class="left-card-game">PEGI 12</span><br>
                                                    <span class="iconify" data-icon="ant-design:windows-filled" style="color: white;"></span>
                                                </div>  
                                            </div>
                                            <div class="d-flex flex-column justify-content-between text-end right-ml-cart-card">
                                                <p class="right-card-game">39,99 €</p>
                                                <p class="left-card-game">Retirer du panier</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="border-card">
                                <div class="card-game">
                                    <h1 class="card-title text-center mb-3">Résumé des jeux</h1>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="left-card-game">
                                            God of War
                                        </span>
                                        <span class="right-card-game">
                                            49,99 €
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="left-card-game">
                                            Kena: Bridges of Spirit
                                        </span>
                                        <span class="right-card-game">
                                            39,99 €
                                        </span>
                                    </div>
                                    <hr class="horizontal-line">
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="left-card-game">
                                            Sous-total
                                        </span>
                                        <span class="right-card-game">
                                            89,98 €
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-outline-primary">Paiement</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <! -- //////////////////////////////MAIN END//////////////////////////////////////// -->

                    <! -- //////////////////////////////FOOTER START//////////////////////////////////////// -->
                        <?php include("../modules/footer.php") ?>

                        <! -- //////////////////////////////FOOTER END//////////////////////////////////////// -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

<script src="/assets/public/js/script.min.js"></script>

</html>