@extends('voitures/layout')

@section('content')
	<h3>ceci est la page index</h3>
<div class="row row-cols-1 row-cols-md-3 g-4">
	@foreach($voitures as $voiture)
		<a href="{{ url('show/'.$voiture->id) }}" style="text-decoration:none; color:black">
			<div class="col">
				<div class="card h-100">
					<img src="{{ asset('voiture/'.$voiture->photo_principale) }}" class="card-img-top" alt="">
					<div class="card-body">
						<h1>{{ $voiture->marque }} </h1>
						<h5 class="card-title">{{ $voiture->modele }}</h5>
						<table style="border-top: solid 1px grey;">
							<tr>
	      						<td style="width: 77%">{{ $voiture->annee }}</td>
	      						<td><h4 class="card-title">{{ $voiture->prix }} €</h4></td>
	    					</tr>
						</table>
					</div>
				</div>
			</div>
		</a>
	@endforeach
	
</div>
{{ $voitures->links('pagination::bootstrap-4') }}

@endsection
