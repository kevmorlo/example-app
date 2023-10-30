<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site laravel sur les carriéres</title>
    <meta descriprtion="">
</head>
<body>
    <h1>Les concessions</h1>
    <table>
        <tbody>       
            <tr class="titre">
                <td>N°</td>
                <td>Concession</td>
                <td>N° SIRET</td>
                <td>License</td>
                <td>N° de téléphone</td>
            </tr>
            @foreach($concessions as $concession)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$concession->name}}</td>
                <td>{{$concession->siret}}</td>
                <td>{{$concession->license}}</td>
                <td>{{$concession->phone}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>