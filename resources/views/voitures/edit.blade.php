@extends('voitures/layout')

@section('content')

	<h1>Editer : <a class="btn btn-secondary" href="javascript:history.back()" role="button">Retour</a></h1>

	{!! Form::open(['method' => 'put', 'enctype' => 'multipart/form-data']) !!}

		
		<div class="row g-3">
			<div class="col-md-6">
    			{!! Form::label('marque', 'Marque :', ['class' => 'form-label']) !!}
				{!! Form::text('marque', $voiture->marque, ['class' => 'form-control']) !!}
		 	</div>
		  	<div class="col-md-6">
		  		{!! Form::label('modele', 'Modèle :', ['class' => 'form-label']) !!}
				{!! Form::text('modele', $voiture->modele, ['class' => 'form-control']) !!}
		  	</div>
			<div class="mb-3">
				{!! Form::label('description', 'Description :', ['class' => 'form-label']) !!}
				{!! Form::textarea('description', $voiture->description, ['class' => 'form-control', 'rows' => 3]) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('finition', 'Finition :', ['class' => 'form-label']) !!}
				{!! Form::text('finition', $voiture->finition, ['class' => 'form-control']) !!}
		  	</div>
		  	<div class="col-md-3">
		  		{!! Form::label('annee', 'Année :', ['class' => 'form-label']) !!}
				{!! Form::number('annee', $voiture->annee, ['class' => 'form-control', 'min'=>'1900', 'max'=>'2021', 'step'=>'1']) !!}
		  	</div>
		  	<div class="col-md-3">
		  		{!! Form::label('puissance', 'Puissance :', ['class' => 'form-label']) !!}
				{!! Form::text('puissance', $voiture->puissance, ['class' => 'form-control']) !!}
		  	</div>
		  	<div class="col-md-3">
		  		{!! Form::label('prix', 'Prix :', ['class' => 'form-label']) !!}
				{!! Form::text('prix', $voiture->prix, ['class' => 'form-control', 'min'=>'0', 'step'=>'0.01']) !!}
		  	</div>
		  	<div class="col-md-6">
		  		{!! Form::label('photo_principale', 'Insérer une image :', ['class' => 'form-label']) !!}
				{!! Form::file('photo_principale', ['class' => 'form-control', 'accept'=>'image/*']) !!}
			</div>
			<div class="col-12">
		    	<button class="btn btn-primary">Modifier</button>
		  	</div>
		</div>

	{!! Form::close() !!}

@endsection