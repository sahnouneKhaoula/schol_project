<!DOCTYPE html>
<html lang="fr"  >
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Scool</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-4.6.0-dist\css\bootstrap.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('unniversites.index') }}">Unniversites <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('classes.index')}}">Classes <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('etudiants.index')}}">Etudiant <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
 </nav>  
  

 <div class="container">
<div class="card mt-5">
	<div class="card-header">
		Ajouter une classe

	</div>
	<div class="card-body">
		<form action="{{ route('etudiants.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<label for="nom">Nom etudiant</label>
			<input type="text" name="nom" class="form-control">
			<label for="prenom">Prenom etudiant</label>
      		<input type="text" name="prenom" class="form-control">
            <label for="">Photo de profil</label>
			<input type="file"  name="photo" class="form-control" required>
			<label for="telephone">Telephone etudiant</label>
			<input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror " required value="{{old('telephone')}}">
            @error('telephone')
			<small class="text-danger">{{ $message }}</small>
			@enderror
            <br>
            <label for="email">Email etudiant</label>
			<input type="text" name="email" class="form-control @error('email') is-invalid @enderror " required >
			@error('email')
			<small class="text-danger">{{ $message }}</small>
			@enderror 
			<br>
            <label for="">Universite</label>
			<select name="unniversite" id="mySelect" class="form-control" >
				@foreach($unniversites as $unniversite)
				<option value="{{ $unniversite->id }}" >{{ $unniversite->libelle }}</option>
				@endforeach
			 </select>
             <script>
                             
                $( "#mySelect" ).click(function() {
                console.log(this.value)
                $("#classes").find("option").remove().end()
                $.ajax({
                url: `http://127.0.0.1:8000/classes/liste/${this.value}`, 
                success: function(response){
                console.log(response)
                response.forEach(item => {
                $('#classes').append(new Option(item.nom, item.id))
                console.log(item.nom)
          });
        }
      });
    });
             </script>

            
            <label for=""  >Classe</label>
            <select name="classe" id="classes" class="form-control"  >
           
			</select>
         
			
			<button type="submit" class="btn btn-success mt-5">Enregistrer</button>
		</form>
	</div>
</div>
</div>
</html>
