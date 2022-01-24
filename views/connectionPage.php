<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nebula connection page</title>
    <link rel="stylesheet" href="/assets/public/css/style.min.css">
</head>

<body>

    <! -- //////////////////////////////HEADER START//////////////////////////////////////// -->
        <?php include("../includes/header.php") ?>

        <! -- //////////////////////////////HEADER END//////////////////////////////////////// -->

            <! -- //////////////////////////////MAIN START//////////////////////////////////////// -->
                <main class="container white-page">
                    <div class="row justify-content-center">
                        <div class="section border-card2 col-4">
                            <div class="card-game2">
                                <h1 class="card-title text-center">Connexion</h1>
                                <form class="mb-3">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="session">
                                        <label class="form-check-label" for="session">Se souvenir de moi</label>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-primary">Se connecter</button>
                                    </div>
                                </form>
                                <p class="text-center">
                                    Vous n'avez pas de compte Nebula ?<br>
                                    <a class="connexion" href="registrationPage.php">Créer un compte</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </main>
                <! -- //////////////////////////////MAIN END//////////////////////////////////////// -->

                    <! -- //////////////////////////////FOOTER START//////////////////////////////////////// -->
                        <?php include("../includes/footer.php") ?>

                        <! -- //////////////////////////////FOOTER END//////////////////////////////////////// -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

<script src="/assets/public/js/script.min.js"></script>

</html>