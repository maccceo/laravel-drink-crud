@extends('layouts.baseLayout');

@section('content')

	@foreach ($results as $element)
		<div class="box">
			<p>{{ $element -> name }}</p>
			<p>{{ $element -> brand }}</p>
			<p>Prezzo: {{ $element -> price }}</p>
			<p>Data di scadenza: {{ $element -> expiring_date }}</p>
		</div>
	@endforeach
	<hr>
		<p>Prezzo massimo: <strong>{{ $max }}€</strong></p>
		<p>Prezzo minimo: <strong>{{ $min }}€</strong></p>
		<p>Prezzo medio: <strong>{{ $avg }}€</strong></p>
		
@endsection