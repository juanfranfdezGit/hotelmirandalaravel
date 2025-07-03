@extends('layouts.app')

@section('content')
    <h1>Detalles de la Actividad</h1>

    <p><strong>Tipo:</strong> {{ $activity->type }}</p>

    <p><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($activity->datetime)->format('d/m/Y H:i') }}</p>

    <p><strong>Usuario:</strong> {{ $activity->user->name ?? 'Usuario no asignado' }}</p>

    <p><strong>Pagado:</strong> {{ $activity->paid ? 'Sí' : 'No' }}</p>

    @if($activity->notes)
        <p><strong>Notas:</strong> {{ $activity->notes }}</p>
    @endif

    <p><strong>Satisfacción:</strong> {{ $activity->satisfaction ?? 'No evaluado' }}</p>
@endsection

<pre>
{{ var_dump($activity->user) }}
</pre>