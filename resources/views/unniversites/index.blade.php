@extends('parents.index')
@section('contenu')
	<div class="container">
		<div class="row">
			<div class="col-lg-12 ">
				<h3>Liste des unniversités</h3>
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
					<a href="{{  route('unniversites.create') }}" class="float-right btn btn-outline-success mt-2 mr-2">Ajouter une unniversité</a>
						
					</p>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
                                <th>N°</th>
								<th>Libelle</th>
								<th>Description</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($unniversites as $num=>$unniversites)
							<tr>
								<td>{{ $num + 1 }}</td>
								<td>{{ $unniversites->libelle }}</td>
								<td>{{ $unniversites->description}}</td>
								
								<td>
									<div class="btn-group">
										<a href="{{ route('unniversites.show',$unniversites->id) }}" class="btn btn-info">detail</a>
									<a href="{{ route('unniversites.edit',$unniversites->id) }}" class=" btn btn-warning">modifier</a>

									<form action="{{ route('unniversites.destroy',$unniversites->id) }}" method="post">
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
