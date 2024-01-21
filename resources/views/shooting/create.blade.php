<!-- resources/views/shooting/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Shooting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <h2>Create Shooting</h2>
        <form action="{{ route('shooting.store') }}" method="POST">
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
