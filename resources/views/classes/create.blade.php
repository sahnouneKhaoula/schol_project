@extends('parents.index')
@section('contenu')

<div class="card mt-5">
	<div class="card-header">
		Ajouter une classe

	</div>
	<div class="card-body">
		<form action="{{ route('classes.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<label for="nom">Nom du classe</label>
			<input type="text" name="nom" class="form-control">
			
            <label for="">Universite</label>
			<select name="unniversite" class="form-control" >
				@foreach($unniversites as $unniversite)
				<option value="{{ $unniversite->id }}">{{ $unniversite->libelle }}</option>
				@endforeach
			</select>
            <label for="description">Description du classe</label>
            <textarea name="description"  class="form-control" rows="10"></textarea>
			
			
			<button type="submit" class="btn btn-success mt-5">Enregistrer</button>
		</form>
	</div>
</div>

@endsection
