<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nebula</title>
    <link rel="stylesheet" href="/assets/public/css/style.min.css">
</head>
<body>

    <! -- //////////////////////////////HEADER START//////////////////////////////////////// -->
    <header class="sticky-top d-flex justify-content-between align-items-center p-3">
        <div class="ms-2 d-flex">
            <div>
                <a href="">
                    <img class="logo" src="/assets/img/logo/logo_nebula_no_name_55px.png" alt="logo nebula">
                    <img class="logo" src="/assets/img/logo/logo_nebula_name_100px.png" alt="logo nebula">
                </a>
            </div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Chercher" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Chercher</button>
            </form>
        </div>
        <div class="me-2">
                <a class="menu" href="">Boutique</a> 
                <a class="menu" href="">Compte</a>
                <a class="menu" href="">Connexion</a>
        </div>
    </header>
    <! -- //////////////////////////////HEADER END//////////////////////////////////////// -->

    <! -- //////////////////////////////MAIN START//////////////////////////////////////// -->
    <main class="container">

        <! -- //////////////////////////////CAROUSEL START//////////////////////////////////////// -->
        <div class="section">
            <!-- <img class="carousel" src="/assets/img/games/god_of_war.jpg" alt="god of war"> -->

             <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img class="img-carousel" src="/assets/img/games/god_of_war.jpg" alt="God of War">
                    <div class="text">God of War</div>
                </div>

                <div class="mySlides fade">
                    <img class="img-carousel" src="/assets/img/games/genshin_impact.jpg" alt="God of War">
                    <div class="text">Genshin Impact</div>
                </div>

                <div class="mySlides fade">
                    <img class="img-carousel" src="/assets/img/games/Kena_BOS_GameArt.jpg" alt="God of War">
                    <div class="text">Kena: Bridges of Spirits</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>

        </div>
        <! -- //////////////////////////////CAROUSEL END//////////////////////////////////////// -->

        <! -- //////////////////////////////DISCOVERIES START//////////////////////////////////////// -->
        <div class="section">
            <div class="d-flex align-items-center mb-3">
                <h1 class="t-section me-3 ">Découvertes</h1>
                <a href="">
                    <button class="btn btn-outline-primary">Voir plus</button>
                </a>
            </div>
            <div class="row">
                <div class="border-card col-lg-6 col-sm-12">
                    <div class="card-game">
                        <img class="img-discoveries" src="/assets/img/games/final_fantasy_intergrade.jpeg" alt="Final Fantasy">
                        <h2 class="t-game">FINAL FANTASY® VII REMAKE INTERGRADE</h2>
                        <p class="">Le classique intemporel FINAL FANTASY® VII REMAKE INTERGRADE est de retour avec une aventure, des graphismes et un système de combat inédits.</p>
                        <p class="">79,99 €</p>
                    </div>
                </div>
                <div class="border-card col-lg-6 col-sm-12">
                    <div class="card-game">
                        <img class="img-discoveries" src="/assets/img/games/Kena_BOS_GameArt.jpg" alt="Kena">
                        <h2 class="t-game">Kena: Bridge of Spirits</h2>
                        <p class="">Incarnez Kena, partez à l’aventure et développez une équipe de compagnons-esprits charmants appelés les Rots. </p>
                        <p class="">39,99 €</p>
                    </div>
                </div>
            </div>
        </div>
        <! -- //////////////////////////////DISCOVERIES END//////////////////////////////////////// -->

        <! -- //////////////////////////////MIDSECTION START//////////////////////////////////////// -->
        <div class="section row justify-content-between">
            <! -- //////////////////////////////NEW RELEASES START//////////////////////////////////////// -->
            <div class="col-lg-3 col-sm-5">
                <div class="d-flex align-items-center mb-3">
                    <h1 class="t-section me-3 ">Nouvelles sorties</h1>
                    <a href="">
                        <button class="btn btn-outline-primary">Voir plus</button>
                    </a>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
            </div>
            <! -- //////////////////////////////NEW RELEASES END//////////////////////////////////////// -->

            <div class=" vr vertical-line col-1 mx-auto"></div>

            <! -- //////////////////////////////BEST SELLS START//////////////////////////////////////// -->
            <div class="col-lg-3">
                <div class="d-flex align-items-center mb-3">
                    <h1 class="t-section me-3 ">Meilleures ventes</h1>
                    <a href="">
                        <button class="btn btn-outline-primary">Voir plus</button>
                    </a>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
            </div>
            <! -- //////////////////////////////BEST SELLS END//////////////////////////////////////// -->
        
            <div class=" vr vertical-line col-1 mx-auto"></div>

            <! -- //////////////////////////////FUTURE RELEASES START//////////////////////////////////////// -->
            <div class="col-lg-3">
                <div class="d-flex align-items-center mb-3">
                    <h1 class="t-section me-3 ">Prochaines sorties</h1>
                    <a href="">
                        <button class="btn btn-outline-primary">Voir plus</button>
                    </a>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>Disponible le 14/01/22</p>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>Disponible le 14/01/22</p>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>Disponible le 14/01/22</p>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>Disponible le 14/01/22</p>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center card-game">
                        <img class="img-midsection me-3" src="/assets/img/games/god_of_war.jpg" alt="god of war">
                        <div>
                            <h2 class="t-game">God of War</h2>
                            <p>Disponible le 14/01/22</p>
                            <p>49,99 €</p>
                        </div>
                    </div>
                </div>
            </div>
            <! -- //////////////////////////////BEST SELLS END//////////////////////////////////////// -->

        </div>
        <! -- //////////////////////////////MIDSECTION END//////////////////////////////////////// -->

        <! -- //////////////////////////////DISCOVERIES START//////////////////////////////////////// -->
        <div class="section">
            <div class="d-flex align-items-center mb-3">
                <h1 class="t-section me-3 ">Découvertes</h1>
                <a href="">
                    <button class="btn btn-outline-primary">Voir plus</button>
                </a>
            </div>
            <div class="row">
                <div class="border-card col-lg-6 col-sm-12">
                    <div class="card-game">
                        <img class="img-discoveries" src="/assets/img/games/final_fantasy_intergrade.jpeg" alt="Final Fantasy">
                        <h2 class="t-game">FINAL FANTASY® VII REMAKE INTERGRADE</h2>
                        <p>Le classique intemporel FINAL FANTASY® VII REMAKE INTERGRADE est de retour avec une aventure, des graphismes et un système de combat inédits.</p>
                        <p>79,99 €</p>
                    </div>
                </div>
                <div class="border-card col-lg-6 col-sm-12">
                    <div class="card-game">
                        <img class="img-discoveries" src="/assets/img/games/Kena_BOS_GameArt.jpg" alt="Kena">
                        <h2 class="t-game">Kena: Bridge of Spirits</h2>
                        <p>Incarnez Kena, partez à l’aventure et développez une équipe de compagnons-esprits charmants appelés les Rots. </p>
                        <p>39,99 €</p>
                    </div>
                </div>
            </div>
        </div>
        <! -- //////////////////////////////DISCOVERIES END//////////////////////////////////////// -->

    </main>
    <! -- //////////////////////////////MAIN END//////////////////////////////////////// -->

    <! -- //////////////////////////////FOOTER START//////////////////////////////////////// -->
    <footer class="pt-5 pb-5 ps-4 pe-4">
        <div class="mb-3">
            <span class="iconify me-3" data-icon="akar-icons:instagram-fill" style="color: white; font-size: 30px"></span>
            <span class="iconify" data-icon="akar-icons:twitter-fill" style="color: white; font-size: 30px;"></span>
        </div>
        <div>
            <p>
            © 2022, Nebula. Tous droits réservés. Nebula et le logo Nebula sont des marques ou des marques déposées de Nebula en France et ailleurs. Les autres marques ou noms de produit appartiennent à leurs propriétaires respectifs. En dehors de la France, les transactions sont gérées par Nebula, S.à r.l.   
            </p>
        </div>
        <div class="d-flex justify-content-between ">
            <div>
                <a class="menu me-2" href="">Contact</a>
                <a class="menu me-2" href="">Conditions d'utilisations</a>
                <a class="menu me-2" href="">Politique de confidentialité</a>
            </div>
            <div>
                <img class="logo" src="/assets/img/logo/logo_nebula_no_name_55px.png" alt="logo nebula">
                <img class="logo" src="/assets/img/logo/logo_nebula_name_100px.png" alt="logo nebula">  
            </div>   
        </div>
    </footer>
    <! -- //////////////////////////////FOOTER END//////////////////////////////////////// -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

<script src="/assets/public/js/script.min.js"></script>
</html>