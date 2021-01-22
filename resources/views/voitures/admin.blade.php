@extends('voitures/layout')

@section('content')
	<h2>Liste des voitures <a href="{{ url('create') }}" class="btn btn-success">+ Ajouter</a></h2>                   
	@if (session('success'))
		<div class="alert alert-success">
		    {{ session('success') }}
		</div>
	@endif
	@foreach($voitures as $voiture)
		<div class="card">
	        <div class="row no-gutters">
	            <div class="col-auto">
	                <img src="{{ asset('voiture/'.$voiture->photo_principale) }}"  width="180" class="img-fluid" alt="">
	            </div>
	            <div class="col">
	                <div class="card-block px-2">
	                	<table style="width: 100%">
	                		<thead>
	                			<th><h4 class="card-title">{{$voiture->marque}} {{$voiture->modele}}</h4></th>
	                		</thead>
	                		<tbody>
	                			<tr>
	                				<td colspan="4">
	                					<p class="card-text"><b>Description :</b></br>{{$voiture->description}}</p>
	                				</td>
	                				<td style="width: 100px">
	                					<a href="{{ url('edit/'.$voiture->id) }}" class="btn btn-warning">Modifier</a>	
	                				</td>
	                				<td style="width: 0px">
	                					<form action="{{ url('delete/'.$voiture->id) }}" method="POST" enctype="multipart/form-data">
	                						@csrf
	                					<button class="btn btn-danger">Supprimer</button>
	                					</form>
	                				</td>
	                			</tr>
	                			<tr>
	                				<td><b>Finition : </b>{{$voiture->finition}}</td>
	                				<td><b>Année : </b>{{$voiture->annee}}</td>
	                				<td><b>Puissance : </b>{{$voiture->puissance}} ch</td>
	                				<td><b>Prix : </b>{{$voiture->prix}} €</td>
	                				<td></td>
	                			</tr>
	                		</tbody>
	                	</table>
	                </div>
	            </div>
	        </div>
	    </div>
   @endforeach
   {{ $voitures->links('pagination::bootstrap-4') }}
@endsection