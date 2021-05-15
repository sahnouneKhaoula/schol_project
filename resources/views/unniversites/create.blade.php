@extends('parents.index')

@section('contenu')

<div class="card mt-5">
	<div class="card-header">
		Ajout categorie
	</div>
	<div class="card-body">
		<form action="{{ route('unniversites.store') }}" method="post">
					
					@csrf

					<h2>Créer une unniversité</h2>
					<label>Libelle unniversité</label>
					<input type="text" name="libelle" class="form-control @error('nom') is-invalid @enderror" required>
                    @error('nom')
						<small class="text-danger">{{ $message }}</small>
					@enderror
                    <label>Description unniversité</label>
					<input type="text" name="description" class="form-control @error('nom') is-invalid @enderror" >
					
					<input type="submit" value="Enregister" class="btn btn-success btn-block mt-5">
				</form>
	</div>
</div>

@endsection
