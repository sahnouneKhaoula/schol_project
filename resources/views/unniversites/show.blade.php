@extends('parents.index')

@section('contenu')
<div class="card mt-5">
	<div class="card-header">
		Details d'unniversité
	</div>
	<div class="card-body">
		<ul class="list-group">
			<li class="list-group-item"><strong>libelle :</strong> {{ $unniversite->libelle }}</li>
			<li class="list-group-item"><strong>description :</strong> {{ $unniversite->description }}</li>
			<li class="list-group-item"><strong>Crée le :</strong>{{ $unniversite->created_at }}</li>
		</ul>
		
	</div>
</div>
@endsection
