<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER SHOOTING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>AJOUTER SHOOTING</h1>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul>
                    @foreach($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error}}</li>
                    @endforeach
                </ul>
                <form action="/ajouter/trt" method="POST" class="form-group">
    @csrf
                  
              


            <div class="form-group">
                <label for="Nom" >Nom</label>
                <input type="text" class="form-control"  id="Nom" name="Nom">
                
            </div>
            <div class="form-group">
                 <label for="Prenom" >Prenom</label>
                 <input type="text" class="form-control" id="Prenom" name="Prenom">
           </div>
           <div class="form-group">
                 <label for="Tel" >Tel</label>
                 <input type="text" class="form-control" id="Tel" name="Tel">
           </div>
           <div class="form-group">
                 <label for="Email" >Email</label>
                 <input type="Email" class="form-control" id="Email" name="Email">
           </div>
           <div class="form-group">
                 <label for="Designation" >Designation</label>
                 <input type="text" class="form-control" id="Designation" name="Designation">
           </div>
           <div class="form-group">
                 <label for="Date de reservation" >Date de reservation</label>
                 <input type="date" class="form-control" id="Date de reservation" name="Date_de_reservation">
           </div>
           <div class="form-group">
                 <label for="Heure de debut" >Heure de debut</label>
                 <input type="time" class="form-control" id="Heure de debut" name="Heure_de_debut">
           </div>
           <div class="form-group">
                 <label for="Journee du shooting" >Journee du shooting</label>
                 <input type="date" class="form-control" id="Journee du shooting" name="Journee_du_shooting">
           </div>
         
          
           <div class="form-group">
                 <label for="Date de livraison" >Date de livraison</label>
                 <input type="date" class="form-control" id="Date de livraison" name="Date_de_livraison">
           </div>
           
           <button type="submit" class="btn btn-primary">AJOUTER SHOOTING</button>
                    <br>
                    <a href="/shooting" class="btn btn-danger">Aperçu liste shooting</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>