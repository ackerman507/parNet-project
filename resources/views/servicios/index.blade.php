@extends('base')
@section('title', 'Servicios')
@section('body')
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h1>Servicios</h1>
            <a href="{{ route('servicios.create') }}" class="btn btn-success">Agregar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table id="services" class="table w-100">
                <thead>
                    <th>Área</th>
                    <th>Descripción</th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/servicios/index.js') }}"></script>
@endpush
