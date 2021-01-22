@extends('voitures/layout')

@section('content')
@if (session('error'))
	<div class="alert alert-danger">
		{{ session('error') }}
	</div>
@endif
<h3>Ajouter une nouvelle voiture : <a class="btn btn-secondary" href="javascript:history.back()" role="button">Retour</a></h3>
<form action="{{ url('create') }}" method="POST" class="row g-3" enctype="multipart/form-data">
	@csrf
	<div class="col-md-6">
    	<label for="inputEmail4" class="form-label">Marque :</label>
    	<input type="text" class="form-control" name="marque">
 	</div>
  	<div class="col-md-6">
    	<label for="inputPassword4" class="form-label">Modèle :</label>
    	<input type="text" class="form-control" name="modele">
  	</div>
	<div class="mb-3">
		<label for="exampleFormControlTextarea1" class="form-label">Description :</label>
		<textarea class="form-control" name="description" rows="3"></textarea>
	</div>
	<div class="col-md-3">
    	<label for="inputCity" class="form-label">Finition :</label>
    	<input type="text" class="form-control" name="finition">
  	</div>
  	<div class="col-md-3">
    	<label for="inputCity" class="form-label">Année :</label>
    	<input type="number" class="form-control" name="annee" min="1900" max="2021" step="1">
  	</div>
  	<div class="col-md-3">
    	<label for="inputCity" class="form-label">Puissance :</label>
    	<input type="number" class="form-control" name="puissance">
  	</div>
  	<div class="col-md-3">
    	<label for="inputCity" class="form-label">Prix :</label>
    	<input type="number" class="form-control" name="prix" min="0"  step="0.01">
  	</div>
  	<div class="col-md-6">
  		<label for="formFile" class="form-label">Insérer l'image :</label>
  		<input class="form-control" type="file" name="photo_principale" accept="image/*">
	</div>
	<div class="col-12">
    	<button type="submit" class="btn btn-primary">Créer</button>
  	</div>
</form>
@endsection