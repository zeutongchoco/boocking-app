<!-- resources/views/shooting/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Wedding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <h2>Show Wedding</h2>
        <div>
            <strong>ID:</strong> {{ $wedding->id }}<br>
            <strong>Nom:</strong> {{ $wedding->Nom }}<br>
            <strong>Prenom:</strong> {{ $wedding->Prenom }}<br>
            <strong>Tel:</strong> {{ $wedding->Tel }}<br>
            <strong>Email:</strong> {{ $wedding->Email }}<br>
            <strong>Designation:</strong> {{ $wedding->Designation }}<br>
            <strong>Date de reservation:</strong> {{ $wedding->Date_de_reservation }}<br>
            <strong>Heure de debut:</strong> {{ $wedding->Heure_de_debut }}<br>
            <strong>Journee du shooting:</strong> {{ $wedding->Journee_du_shooting }}<br>
            <strong>Date de livraison:</strong> {{ $wedding->Date_de_livraison }}<br>
        </div>
        <br>
        <a href="{{ route('wedding.index') }}" class="btn btn-primary">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
