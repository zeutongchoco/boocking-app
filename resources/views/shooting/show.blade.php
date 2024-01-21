<!-- resources/views/shooting/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Shooting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <h2>Show Shooting</h2>
        <div>
            <strong>ID:</strong> {{ $shooting->id }}<br>
            <strong>Nom:</strong> {{ $shooting->Nom }}<br>
            <strong>Prenom:</strong> {{ $shooting->Prenom }}<br>
            <strong>Tel:</strong> {{ $shooting->Tel }}<br>
            <strong>Email:</strong> {{ $shooting->Email }}<br>
            <strong>Designation:</strong> {{ $shooting->Designation }}<br>
            <strong>Date de reservation:</strong> {{ $shooting->Date_de_reservation }}<br>
            <strong>Heure de debut:</strong> {{ $shooting->Heure_de_debut }}<br>
            <strong>Journee du shooting:</strong> {{ $shooting->Journee_du_shooting }}<br>
            <strong>Date de livraison:</strong> {{ $shooting->Date_de_livraison }}<br>
        </div>
        <br>
        <a href="{{ route('shooting.index') }}" class="btn btn-primary">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
