@extends('parents.index')
@section('contenu')
	<div class="container">
		<div class="row">
			<div class="col-lg-12 ">
				<h3>Liste des étudiants</h3>
			</div>

			<div class="col-lg-12">
				<p>
	@if(session('message'))
	<div class="alert alert-success" role="alert">
  {{ session('message') }}
</div>
@endif
	@if(session('messagedelete'))
	<div class="alert alert-danger" role="alert">
  {{ session('messagedelete') }}
</div>
@endif
</p>
				<div >
					<p>
					<a href="{{  route('etudiants.create') }}" class="float-right btn btn-outline-success mt-2 mr-2">Ajouter un étudiant</a>
						
					</p>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Nom</th>
								<th>Prenom</th>
                                <th>photo</th>
								<th>telephone</th>
								<th>email</th>
								<th>classe</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($etudiants as $eudiant)
							<tr>
								
								<td>{{ $eudiant->nom }}</td>
								<td>{{ $eudiant->prenom}}</td>
                                <td>
						<img src="{{ $eudiant->imagePrincipale() }}" width="50">
					</td>
								
								<td>{{ $eudiant->telephone}}</td>
								<td>{{ $eudiant->email}}</td>
								<td>{{ $eudiant->classe_id }}</td>
								
								<td>
									<div class="btn-group">
										<a href="{{ route('etudiants.show',$eudiant->id) }}" class="btn btn-info">detail</a>
									<a href="{{ route('etudiants.edit',$eudiant->id) }}" class=" btn btn-warning">modifier</a>

									<form action="{{ route('etudiants.destroy',$eudiant->id) }}" method="post">
									@method('DELETE')
									@csrf
									<button type="submit" class="btn btn-danger">supprimer</button>
									</form>
									</div>
							
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
