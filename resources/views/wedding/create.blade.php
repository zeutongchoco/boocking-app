<!-- resources/views/shooting/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Wedding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        /* Ajoutez ces styles dans la balise style de votre fichier HTML ou dans un fichier CSS externe */
/* Ajoutez ces styles dans la balise style de votre fichier HTML ou dans un fichier CSS externe */

body {
    background-image: url('{{ asset('image/mariage.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);
    max-width: 400px; /* Ajustez la largeur maximale selon vos besoins */
    width: 100%;
}

.container h2 {
    text-align: center;
    color: #333;
    margin-bottom: 10px;
}

.form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn-success {
    width: 100%;
    padding: 8px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-success:hover {
    background-color: #218838;
}
</style>

</head>
<body>

    <div class="container mt-5">
        <h2>Create Wedding</h2>
        <form action="{{ route('wedding.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="text" class="form-control" id="Nom" name="Nom" required>
            </div>
            <div class="form-group">
                <label for="Prenom">Prenom</label>
                <input type="text" class="form-control" id="Prenom" name="Prenom" required>
            </div>
            <div class="form-group">
                <label for="Tel">Tel</label>
                <input type="text" class="form-control" id="Tel" name="Tel" required>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="Email" name="Email" required>
            </div>
            <div class="form-group">
                <label for="Designation">Designation</label>
                <input type="text" class="form-control" id="Designation" name="Designation" required>
            </div>
            <div class="form-group">
                <label for="Date_de_reservation">Date de reservation</label>
                <input type="date" class="form-control" id="Date_de_reservation" name="Date_de_reservation" required>
            </div>
            <div class="form-group">
                <label for="Heure_de_debut">Heure de debut</label>
                <input type="time" class="form-control" id="Heure_de_debut" name="Heure_de_debut" required>
            </div>
            <div class="form-group">
                <label for="Journee_du_shooting">Journee du shooting</label>
                <input type="date" class="form-control" id="Journee_du_shooting" name="Journee_du_shooting" required>
            </div>
            <div class="form-group">
                <label for="Date_de_livraison">Date de livraison</label>
                <input type="date" class="form-control" id="Date_de_livraison" name="Date_de_livraison" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
