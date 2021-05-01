@extends('parents.index')

@section('contenu')
<div class="card mt-5">
	<div class="card-header">
		Details de la classe
	</div>
	<div class="card-body">
		<ul class="list-group">
			<li class="list-group-item"><strong>Nom :</strong> {{ $classe->nom }}</li>
			<li class="list-group-item"><strong>Unniversité :</strong> {{ $classe->unniversite->libelle }}</li>
			<li class="list-group-item"><strong>description :</strong> {{ $classe->description }}</li>
			<li class="list-group-item"><strong>Crée le :</strong>{{ $classe->created_at }}</li>
		</ul>
		
	</div>
</div>
@endsection
