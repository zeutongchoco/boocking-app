<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHOOTING SIMPLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container text-center">

      <div class="row background-list">

        <div class="col s12">
           <h1>RESERVATION SHOOTING</h1>
           <hr>
              <a href="/ajouter" class="btn btn-primary">Ajouter un shooting</a>
            <hr>
            @if (session('status'))
                <div class= "alert alert-success">
                  {{ session('status') }}
               </div>
            @endif
              <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Tel</th>
                        <th>Email</th>
                        <th>Designation</th>
                        <th>Date de reservation</th>
                        <th>Heure de debut</th>
                        <th>Journee du shooting</th>
                        <th>Date de livraison</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                     $ide =1;
                  @endphp
                  @foreach($shootings as $shooting)
                    <tr>
                        <td>{{ $ide }}</td>
                        <td>{{$shooting->Nom}}</td>
                        <td>{{$shooting->Prenom}}</td>
                        <td>{{$shooting->Tel}}</td>
                        <td>{{$shooting->Email}}</td>
                        <td>{{$shooting->Designation}}</td>
                        <td>{{$shooting->Date_de_reservation}}</td>
                        <td>{{$shooting->Heure_de_debut}}</td>
                        <td>{{$shooting->Journee_du_shooting}}</td>
                        
                        <td>{{$shooting->Date_de_livraison}}</td>
                        <td>
                            <a href="/update-shooting/{{$shooting->id}}" class="btn btn-info">Update</a>
                            <a href="/delete-shooting/{{$shooting->id}}" class="btn btn-danger">Delete</a>
                        </td>
                     </tr>
                     @php
                        $ide += 1;
                     @endphp
                     @endforeach
                </tbody>
              </table>
        </div>
    
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
    .background-list {
        background-image: url('/public/image/list.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        /* Autres propriétés CSS pour le positionnement et l'apparence de l'arrière-plan */
    }
</style>
  </body>
</html>