@extends('parents.index')

@section('contenu')

<div class="card mt-5">
					<div class="card-header">
						Modification de la classe
					</div>
					<div class="card-body">
						<form action="{{ route('classes.update',$classe->id) }}" method="POST">
							
					@method('PUT')
					@csrf

					<label for="">Nom de la classe</label>
					<input type="text" name="nom" class="form-control mb-3" value="{{ $classe->nom }}" required>
                    <label for="">Description de la classe</label>
					<input type="text" name="description" class="form-control mb-3" value="{{ $classe->description }}" required>

					<button type="submit" class="btn btn-warning">Modifier l'unniversité</button>
				</form>
					</div>
				</div>
@endsection
