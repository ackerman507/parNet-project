@extends('base')
@section('title', 'Sugerencias')
@section('body')
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h1>Sugerencias</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex gap-2">
            <a class="btn btn-primary" href="{{ route('excel') }}">Exportar Excel</a>
            <a class="btn btn-primary" href="{{ route('pdf') }}" target="_blank">Exportar PDF</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table id="suggestions" class="table w-100">
                <thead>
                    <th>Nombre</th>
                    <th>Sugerencia</th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/sugerencias/index.js') }}"></script>
@endpush
