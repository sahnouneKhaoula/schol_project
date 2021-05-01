@extends('parents.index')
@section('contenu')
<br>
	<div class="container">
		<div class="row">
			<h1>{{ $etudiant->prenom }}</h1>
			<h1>{{ $etudiant->nom }}</h1>
			<div class="col-lg-6">
				
				<div id="img"><img src="{{ $etudiant->imagePrincipale() }}" class="img" ></div>
				</p>		   
			</div>
		</div>
	</div>
</body>
</html>
@endsection
