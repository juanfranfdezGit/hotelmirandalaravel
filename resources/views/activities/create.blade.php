@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Actividad</h1>
    
    <form method="POST" action="{{ route('activities.store') }}">
        @csrf

        <label>Tipo:</label>
        <select name="type">
            <option value="">Seleccione un tipo</option>
            <option value="surf" {{ old('type') == 'surf' ? 'selected' : '' }}>Surf</option>
            <option value="windsurf" {{ old('type') == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
            <option value="kayak" {{ old('type') == 'kayak' ? 'selected' : '' }}>Kayak</option>
            <option value="atv" {{ old('type') == 'atv' ? 'selected' : '' }}>ATV</option>
            <option value="hot air balloon" {{ old('type') == 'hot air balloon' ? 'selected' : '' }}>Hot Air Balloon</option>
        </select>
        @error('type')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br>

        <label>Fecha:</label>
        <input type="datetime-local" name="datetime" value="{{ old('datetime') }}">
        @error('datetime')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br>

        <label>Pagado:</label>
        <input type="hidden" name="paid" value="0">
        <input type="checkbox" name="paid" value="1" {{ old('paid') ? 'checked' : '' }}>
        @error('paid')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br>

        <label>Notas:</label>
        <textarea name="notes">{{ old('notes') }}</textarea>
        @error('notes')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br>

        <label>Satisfacción (0-10):</label>
        <input type="number" name="satisfaction" min="0" max="10" value="{{ old('satisfaction') }}">
        @error('satisfaction')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">Guardar</button>
    </form>
@endsection