@extends('base')
@section('title', 'Agregar sugerencia')
@section('body')
    @include('sugerencias.form');
    <button type="button" class="btn btn-success" onclick="createSuggestion();">Enviar</button>
@endsection

@push('scripts')
    <script src="{{ @asset('js/sugerencias/createUpdate.js') }}"></script>
@endpush