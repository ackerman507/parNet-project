@extends('sidebar')
@section('title', 'Noticias')
@section('content')
    <div class="row">
        <div class="col-5 col-md-3 titulos">
            <p style="titulos" class="ms-3">Certificaciones</p>
        </div>
       
    </div>
    <div class="row">
        <div class="col-12 col-md-12 d-flex justify-content-end">
        <a href="{{ route('noticias.create') }}" class="btn btn-success">Agregar</a>
    </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <table id="news" class="table table-success table-striped w-100">
                <thead>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Activa</th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/noticias/index.js') }}"></script>
@endpush
