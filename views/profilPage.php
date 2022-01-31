<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nebula profile page</title>
    <link rel="stylesheet" href="/assets/public/css/style.min.css">
</head>

<body>

    <! -- //////////////////////////////HEADER START//////////////////////////////////////// -->
        <?php include("modules/header.php") ?>

        <! -- //////////////////////////////HEADER END//////////////////////////////////////// -->

            <! -- //////////////////////////////MAIN START//////////////////////////////////////// -->
                <main class="container white-page">
                    <div class="section">
                        <div class="d-flex align-items-center mb-3">
                            <h1 class="t-section">Paramètres Généraux</h1>
                            <span></span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h2 class="t-gamePage">Infos de compte</h2>
                            <span></span>
                        </div>
                        <p class="description2 mb-3">
                            Gérez les informations de compte que vous avez partagées avec Nebula dont votre nom, vos
                            informations de contact et plus.
                        </p>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse mail</label>
                                <div class="border-button">
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                        placeholder="mail@mail.com">
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <h2 class="t-gamePage">Informations personnelles</h2>
                                <span></span>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="firstname" class="form-label">Prénom</label>
                                    <div class="border-button">
                                        <input type="text" class="form-control" id="firstname" placeholder="Aurélien">
                                    </div>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="name" class="form-label">Nom</label>
                                    <div class="border-button">
                                        <input type="text" class="form-control" id="name" placeholder="Prugnaud">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <h2 class="t-gamePage">Adresse</h2>
                                <span></span>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <div class="mb-3">
                                        <label for="adress1" class="form-label">Adresse (ligne 1)</label>
                                        <div class="border-button">
                                            <input type="text" class="form-control" id="adress1"
                                                placeholder="12 rue de nul part">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="city" class="form-label">Ville</label>
                                        <div class="border-button">
                                            <input type="text" class="form-control" id="city"
                                                placeholder="Clermont-Ferrand">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-6">
                                    <div class="mb-3">
                                        <label for="adress2" class="form-label">Adresse (ligne 2)</label>
                                        <div class="border-button">
                                            <input type="text" class="form-control" id="adress2" placeholder="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-6">
                                            <label for="state" class="form-label">Région</label>
                                            <div class="border-button">
                                                <input type="text" class="form-control" id="state"
                                                    placeholder="Auvergne">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="cityCode" class="form-label">Code Postal</label>
                                            <div class="border-button">
                                                <input type="text" class="form-control" id="cityCode"
                                                    placeholder="63000">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="">
                                        <div class="border-button-game-page">
                                            <button class="button-game-page ps-5 pe-5">
                                                Sauvegarder les changements
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="section">
                        <div class="d-flex align-items-center mb-3">
                            <h1 class="t-section">Changer votre mot de passe</h1>
                            <span></span>
                        </div>
                        <p class="description2 mb-3">
                            Pour votre sécurité, nous vous conseillons vivement de choisir un mot de passe unique que
                            vous n'utilisez pour aucun autre compte en ligne.
                        </p>
                        <form>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <div class="mb-3">
                                        <p>Mot de passe actuel</p>
                                        <label for="password" class="form-label">Requis</label>
                                        <div class="border-button">
                                            <input type="password" class="form-control" id="password" placeholder="">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <p>Nouveau mot de passe</p>
                                        <label for="newPassword" class="form-label">Requis</label>
                                        <div class="border-button">
                                            <input type="password" class="form-control" id="newPassword" placeholder="">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <p>Confirmer le nouveau mot de passe</p>
                                        <label for="newPassword2" class="form-label">Requis</label>
                                        <div class="border-button">
                                            <input type="password" class="form-control" id="newPassword2"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-6">
                                    <p>Votre nouveau mot de passe</p>
                                    <p>Vous ne pouvez pas réutiliser l'un de vos 5 derniers mots de passe.</p>
                                    <p>Votre mot de passe doit faire au moins 7 caractères.</p>
                                    <p>Votre mot de passe doit contenir au moins un chiffre.</p>
                                    <p>Votre mot de passe ne peut contenir aucun espace.</p>
                                    <a href="">
                                        <div class="border-button-game-page">
                                            <button class="button-game-page ps-5 pe-5">
                                                Sauvegarder les changements
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="section">
                        <div class="d-flex align-items-center mb-3">
                            <h1 class="t-section">Gestion de paiement</h1>
                            <span></span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h2 class="t-gamePage">Détails de la carte</h2>
                            <span></span>
                        </div>
                        <form>
                            <div class="mb-3">
                                <label for="card" class="form-label">Numro de la carte</label>
                                <div class="border-button">
                                    <input type="test" class="form-control" id="card" aria-describedby="emailHelp"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <div class="mb-3">
                                        <label for="cardDate" class="form-label">Expiration</label>
                                        <div class="border-button">
                                            <input type="text" class="form-control" id="cardDate" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-6">
                                    <div class="mb-3">
                                        <label for="cvv" class="form-label">CVV</label>
                                        <div class="border-button">
                                            <input type="text" class="form-control" id="cvv" placeholder="">
                                        </div>
                                    </div>
                                    <a href="">
                                        <div class="border-button-game-page">
                                            <button class="button-game-page ps-5 pe-5">
                                                Sauvegarder les changements
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="section">
                        <div class="d-flex align-items-center mb-3">
                            <h1 class="t-section">Supprimer le compte</h1>
                            <span></span>
                        </div>
                        <form>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <p>Cliquez sur “Demander la suppression de votre compte” pour lancer le processus de
                                        suppression de votre compte Nebula</p>
                                </div>
                                <div class="mb-3 col-6">
                                    <a href="">
                                        <div class="border-button-game-page">
                                            <button class="button-game-page ps-5 pe-5">
                                                Demander la suppression de votre compte
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
                <! -- //////////////////////////////MAIN END//////////////////////////////////////// -->

                    <! -- //////////////////////////////FOOTER START//////////////////////////////////////// -->
                        <?php include("modules/footer.php") ?>

                        <! -- //////////////////////////////FOOTER END//////////////////////////////////////// -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

<script src="/assets/public/js/script.min.js"></script>

</html>