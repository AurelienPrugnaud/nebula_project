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
                    <div class="section border-card2">
                        <div class="card-game2">
                            <h1 class="card-title text-center">Contact</h1>

                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="border-button">
                                        <input type="email" class="form-control" id="email"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="firstname" class="form-label">Prénom</label>
                                        <div class="border-button">
                                            <input type="text" class="form-control" id="firstname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="name" class="form-label">Nom</label>
                                        <div class="border-button">
                                            <input type="text" class="form-control" id="name" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="textarea" class="form-label">Votre message</label>
                                    <div class="border-button">
                                        <textarea class="form-control" id="textarea"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex justify-content-end">
                                    <a href="">
                                        <div class="border-button">
                                            <button class="button ps-5 pe-5">
                                                Envoyer
                                            </button>
                                        </div>
                                    </a> </div>
                            </form>
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