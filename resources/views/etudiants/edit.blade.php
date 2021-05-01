@extends('parents.index')

@section('contenu')

<div class="card mt-5">
					<div class="card-header">
						Modification Etudiant
					</div>
					<div class="card-body">
						<form action="{{ route('etudiants.update',$etudiant->id) }}" method="POST">
							
					@method('PUT')
					@csrf

					<label for="">Nom de l'étudiant</label>
					<input type="text" name="nom" class="form-control mb-3" value="{{ $etudiant->nom }}" required>
                    <label for="">Prénom d'etudiant</label>
					<input type="text" name="prenom" class="form-control mb-3" value="{{ $etudiant->prenom }}" required>
                    <label for="">telephone d'etudiant</label>
					<input type="text" name="telephone" class="form-control mb-3" value="{{ $etudiant->telephone }}" required>
                    <label for="">email d'etudiant</label>
					<input type="text" name="email" class="form-control mb-3" value="{{ $etudiant->email }}" required>

					<button type="submit" class="btn btn-warning">Modifier l'unniversité</button>
				</form>
					</div>
				</div>
@endsection
