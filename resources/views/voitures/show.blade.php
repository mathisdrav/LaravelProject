@extends('voitures/layout')

@section('content')
	<div class="row no-gutters bg-light position-relative">
		<div class="col-md-6 mb-md-0 p-md-4">
			<img src="{{ asset('voiture/'.$voiture->photo_principale) }}" class="w-100" alt="...">
		</div>
		<div class="col-md-6 position-static p-4 pl-md-0">
			<table class="table">
			  	<thead>
				    <tr>
					    <th scope="col">
					    	<h1>{{$voiture->marque}}</h1>
							<h5 class="mt-0">{{$voiture->modele}}</h5>
						</th>
						<th scope="col" ><h3>{{$voiture->prix}} €</h3></th>
				    </tr>
			  	</thead>
			  	<tbody>
				    <tr>
				    	<td colspan="2"><b>Description :</b></br>{{$voiture->description}}</td>
				    </tr>
				    <tr>
				    	<td><b>Finition :</b></br>{{$voiture->finition}}</td>
				    	<td><b>Année :</b></br>{{$voiture->annee}}</td>
				    </tr>
				    <tr>
				    	<td><b>Puissance :</b></br>{{$voiture->puissance}} ch</td>
				    </tr>
			 	</tbody>
			</table>
			<a class="btn btn-primary" href="javascript:history.back()" role="button">Retour</a>
		</div>
	</div>
@endsection