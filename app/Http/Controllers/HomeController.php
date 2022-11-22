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
        $news = News::all();
        return view('certificaciones', compact('news'));
    }

    public function telecomunicaciones() {
        $news = News::all();
        return view('telecomunicaciones', compact('news'));
    }

    public function redesElectricas() {
        $news = News::all();
        return view('redesElectricas', compact('news'));
    }

    public function circuitosCerrados() {
        $news = News::all();
        return view('circuitosCerrados', compact('news'));
    }

    public function corrienteRegulada() {
        $news = News::all();
        return view('corrienteRegulada', compact('news'));
    }

    public function dataCenters() {
        $news = News::all();
        return view('dataCenters', compact('news'));
    }

    public function fibraOptica() {
        $news = News::all();
        return view('fibraOptica', compact('news'));
    }

    public function cablesEstructurados() {
        $news = News::all();
        return view('cablesEstructurados', compact('news'));
    }

    public function polizas() {
        $news = News::all();
        return view('polizas', compact('news'));
    }

    public function outsourcing() {
        $news = News::all();
        return view('outsourcing', compact('news'));
    }

    public function productos() {
        $productos = Product::all();
        $news = News::all();
        return view('navbar.productos', compact('productos', 'news'));
    }

    public function contactanos() {
        $news = News::all();
        return view('navbar.contactanos', compact('news'));
    }

    public function servicios() {
        $fields = Field::all();
        $news = News::all();
        return view('navbar.servicios', compact('fields', 'news'));
    }

    public function noticias() {
        $news = News::all();
        return view('noticias', compact('news'));
    }

    public function clientes() {
        $news = News::all();
        return view('clientes', compact('news'));
    }

}
