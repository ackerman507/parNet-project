<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $news = News::all();
        return view('index', compact('news'));
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

    public function productos() {
        $productos = Product::all();
        return view('navbar.productos', compact('productos'));
    }

    public function contactanos() {
        return view('navbar.contactanos');
    }

    public function servicios() {
        $fields = Field::all();
        return view('navbar.servicios', compact('fields'));
    }

    public function noticias() {
        $news = News::all();
        return view('noticias', compact('news'));
    }

}
