@extends('parents.index')

@section('contenu')

<div class="card mt-5">
					<div class="card-header">
						Modification unniversité
					</div>
					<div class="card-body">
						<form action="{{ route('unniversites.update',$unniversite->id) }}" method="POST">
							
					@method('PUT')
					@csrf

					<label for="">Libelle unniversité</label>
					<input type="text" name="libelle" class="form-control mb-3" value="{{ $unniversite->libelle }}" required>
                    <label for="">Description unniversité</label>
					<input type="text" name="description" class="form-control mb-3" value="{{ $unniversite->description }}" required>

					<button type="submit" class="btn btn-warning">Modifier l'unniversité</button>
				</form>
					</div>
				</div>
@endsection
