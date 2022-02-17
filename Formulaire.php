<! Doctype html>
<html>
<head>
    <title> Ma page web </title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->

    <meta charset="utf-8"/>
</head>
<body class="container mb-5">
    <h2 class="mt-5 mb-3 d-block text-center">Register</h2>
    <form class="offset-3 bg-black bg-opacity-10 d-block w-50 rounded p-5" method="post" action="enregistrement.php">
        <div class="my-4 align-content-center">
            <label class="form-label col-2" for="nom">Nom :</label>
            <input id="nom" type="text" class="w-82 rounded p-1" name="" placeholder="Entrer votre nom">
        </div>

        <div class="my-3 align-content-center">
            <label class="form-label col-2" for="prenom">Prénom: </label>
            <input id="prenom" type="text" class="W-82 rounded p-1" name="" placeholder="Entrer votre prénom">
        </div>

        <div class="my-3 align-content-center">
            <label class="form-label col-2" for="age">Age :</label>
            <input id="age" type="number" class="W-82 rounded p-1" name="" placeholder="Entrer votre age">
        </div>

        <div class="my-3 align-content-center">
            <label class="form-label col-2" for="email">Email :</label>
            <input id="email" type="email" class="W-82 rounded p-1" name="" placeholder="Entrer votre mail">
        </div>

        <div class="my-3 align-content-center">
            <label class="form-label col-2" for="profession">Profession :</label>
            <input id="profession" type="text" class="W-82 rounded p-1" name="" placeholder="Entrer votre métier">
        </div>

        <div class="my-3 align-content-center">
            <label class="form-label col-2" for="tel">Téléphone :</label>
            <input id="tel" type="tel" class="w-82 rounded p-1" name="" placeholder="Entrer votre numéro de téléphone">
        </div>

        <div class="mt-4">
            <button class="px-5 offset-4 btn btn-warning">Effacer</button>
            <button class="px-5 float-end btn btn-success">Envoyer</button>
        </div>
    </form>
</body>
</html>