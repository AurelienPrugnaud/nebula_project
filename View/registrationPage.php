<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nebula registration page</title>
    <link rel="stylesheet" href="/assets/public/css/style.min.css">
</head>

<body>

    <! -- //////////////////////////////HEADER START//////////////////////////////////////// -->
        <?php include("modules/header.php") ?>

        <! -- //////////////////////////////HEADER END//////////////////////////////////////// -->

            <! -- //////////////////////////////MAIN START//////////////////////////////////////// -->
                <main class="container white-page">
                    <div class="row justify-content-center">
                        <div class="section border-card2 col-4">
                            <div class="card-game2">
                                <h1 class="card-title text-center">Créer un compte</h1>
                                <form>
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Prénom</label>
                                        <div class="border-button">
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nom</label>
                                        <div class="border-button">
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Adresse e-mail</label>
                                        <div class="border-button">
                                            <input type="email" class="form-control" id="email"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <div class="border-button">
                                            <input type="password" class="form-control" id="password">
                                        </div>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="cgu">
                                        <label class="form-check-label" for="cgu">J'ai lu et j'accepte les conditions d'utilisations</label>
                                    </div>
                                    <a href="">
                                        <div class="border-button-game-page">
                                            <button class="button-game-page ps-5 pe-5">
                                                Créer votre compte
                                            </button>
                                        </div>
                                    </a>
                                </form>
                            </div>
                        </div>
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