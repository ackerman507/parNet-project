@extends('base')
@section('title', 'Áreas')
@section('body')
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h1>Áreas</h1>
            <a href="{{ route('areas.create') }}" class="btn btn-success">Agregar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table id="fields" class="table w-100">
                <thead>
                    <th>Área</th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/areas/index.js') }}"></script>
@endpush
