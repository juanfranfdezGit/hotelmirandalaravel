@extends('layouts.app')

@section('content')
    <h1>Lista de Actividades</h1>

    @if ($activities->isEmpty())
        <p>No hay actividades registradas.</p>
    @else
        <ul>
            @foreach ($activities as $activity)
                <li>
                    Tipo: {{ ucfirst($activity->type) }} - 
                    Fecha: {{ \Carbon\Carbon::parse($activity->datetime)->format('d/m/Y H:i') }} - 
                    Usuario: {{ $activity->user->name ?? 'Usuario no asignado' }} - 
                    Pagado: {{ $activity->paid ? 'Sí' : 'No' }} - 
                    Satisfacción: {{ $activity->satisfaction ?? 'No especificada' }}
                </li>
            @endforeach
        </ul>
    @endif
@endsection