<!DOCTYPE html>
<html lang="fr"  >
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
      
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('unniversites.index') }}">Unniversites<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('classes.index')}}">Classes<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('etudiants.index')}}">Etudiant <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
 </nav>  
   <div class="container">
		<div class="row">
			<div class="col-lg-12">
                @yield('contenu')

			</div>
		</div>
	</div>    
  </div>
  
</body>
</html>
