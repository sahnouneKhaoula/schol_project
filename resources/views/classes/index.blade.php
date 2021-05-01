@extends('parents.index')
@section('contenu')
	<div class="container">
		<div class="row">
			<div class="col-lg-12 ">
				<h3>Liste des classe</h3>
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
				<div class="card">
					<p>
					<a href="{{  route('classes.create') }}" class="float-right btn btn-outline-success mt-2 mr-2">Ajouter une classe</a>
						
					</p>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Nom</th>
								<th>universites</th>
								<th>description</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($classes as $classe)
							<tr>
								
								<td>{{ $classe->nom }}</td>
								<td>{{ $classe->unniversite->libelle}}</td>
								<td>{{ $classe->description }}</td>
								<td>
									<div class="btn-group">
										<a href="{{ route('classes.show',$classe->id) }}" class="btn btn-info">detail</a>
									<a href="{{ route('classes.edit',$classe->id) }}" class=" btn btn-warning">modifier</a>

									<form action="{{ route('classes.destroy',$classe->id) }}" method="post">
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
