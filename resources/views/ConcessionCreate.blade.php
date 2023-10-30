<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site laravel sur les carriéres</title>
    <meta descriprtion="">
</head>
<body>
    <h1>Enregistrer sa concession</h1>
    <form action="./success" method="post">
        @csrf
        <input type="text" name="name" id="c_create_name" placeholder="Nom de la concession" required>
        <input type="text" name="siret" id="c_create_siret" placeholder="N° SIRET" required>
        <input type="text" name="license" id="c_create_license" placeholder="N° de license" required>
        <input type="tel" name="phone" id="c_create_phone" placeholder="N° de téléphone">
        <input type="submit" value="Valider">
    </form>
</body>
</html>