<!DOCTYPE html>
<html lang="fr"  >
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SCHOOL</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-4.6.0-dist\css\bootstrap.css') }}">
</head>
<body >

<nav class="navbar navbar-expand-lg navbar-light ">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('unniversites.index') }}">Unniversites<span class="sr-only">(current)</span></a>
      </li>
      
     <h1>< <li class="nav-item">
        <a class="nav-link" href="{{ route('classes.index')}}">Classes<span class="sr-only">(current)</span></a>
      </li><h1>
      
      
    </ul>
   
       
  </div>
</nav>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				@yeild('contenu')

			</div>
		</div>
	</div>
</body>
</html>


