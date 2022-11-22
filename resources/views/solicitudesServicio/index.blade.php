@extends('base')
@section('title', 'Solicitudes de servicio por area')
@section('body')
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h1>Solicitudes de servicio por area</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table id="servicesRequests" class="table w-100">
                <thead>
                    <th>Area sugerida</th>
                    <th>Correo del que lo sugiere</th>
                    <th>Sugerencia de servicio</th>
                    <th>Fecha</th>
                    <th></th>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ @asset('js/solicitudesServicio/index.js') }}"></script>
@endpush
