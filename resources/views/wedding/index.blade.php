<!-- resources/views/shooting/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-image: url('{{ asset('image/list.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
    </style>
</head>
<body>

     <div class="container mt-5">
        <h2>Wedding List</h2>
        <a href="{{ route('wedding.create') }}" class="btn btn-success mb-3">Add Wedding</a>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Tel</th>
                    <th>Email</th>
                    <th>Designation</th>
                    <th>Date de reservation</th>
                    <th>Heure de debut</th>
                    <th>Journee du wedding</th>
                    <th>Date de livraison</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($weddings as $wedding)
                    <tr>
                        <td>{{ $wedding->id }}</td>
                        <td>{{ $wedding->Nom }}</td>
                        <td>{{ $wedding->Prenom }}</td>
                        <td>{{ $wedding->Tel }}</td>
                        <td>{{ $wedding->Email }}</td>
                        <td>{{ $wedding->Designation }}</td>
                        <td>{{ $wedding->Date_de_reservation }}</td>
                        <td>{{ $wedding->Heure_de_debut }}</td>
                        <td>{{ $wedding->Journee_du_wedding }}</td>
                        <td>{{ $wedding->Date_de_livraison }}</td>
                        <td>
                            <a href="{{ route('wedding.show', $wedding->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('wedding.edit', $wedding->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('wedding.destroy', $wedding->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
