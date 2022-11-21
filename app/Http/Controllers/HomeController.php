<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        return view('index');
    }

    public function certificaciones() {
        return view('certificaciones');
    }

    public function telecomunicaciones() {
        return view('telecomunicaciones');
    }

    public function redesElectricas() {
        return view('redesElectricas');
    }

    public function circuitosCerrados() {
        return view('circuitosCerrados');
    }

    public function corrienteRegulada() {
        return view('corrienteRegulada');
    }

    public function dataCenters() {
        return view('dataCenters');
    }

    public function fibraOptica() {
        return view('fibraOptica');
    }

    public function cablesEstructurados() {
        return view('cablesEstructurados');
    }

    public function polizas() {
        return view('polizas');
    }

    public function outsourcing() {
        return view('outsourcing');
    }

}
