@extends('layouts.app')

@section('content')
    <h1>Editar Actividad</h1>

    <form method="POST" action="{{ route('activities.update', $activity->id) }}">
        @csrf
        @method('PUT')

        <label>Tipo:</label>
        <input type="text" name="type" value="{{ old('type', $activity->type) }}"><br>
        @error('type')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label>Fecha:</label>
        <input type="datetime-local" 
               name="datetime" 
               value="{{ old('datetime', \Carbon\Carbon::parse($activity->datetime)->format('Y-m-d\TH:i')) }}"><br>
        @error('datetime')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label>Pagado:</label>
        <input type="checkbox" name="paid" value="1" {{ old('paid', $activity->paid) ? 'checked' : '' }}><br>
        @error('paid')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label>Notas:</label>
        <textarea name="notes">{{ old('notes', $activity->notes) }}</textarea><br>
        @error('notes')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label>Satisfacción (0-10):</label>
        <input type="number" name="satisfaction" min="0" max="10" 
               value="{{ old('satisfaction', $activity->satisfaction) }}"><br>
        @error('satisfaction')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <button type="submit">Actualizar</button>
    </form>
@endsection