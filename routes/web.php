<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('/usuario_sesion', [UserController::class, 'login'])->name('usuario_sesion');

Route::get('/inicia_sesion', [UserController::class, 'index']);

Route::get('/panel_admin', [UserController::class, 'panelAdmin'])->name('panel_admin');

Route::get('/noticias_listar', [NewsController::class, 'getNews'])->name('news.get');

Route::get('/productos_listar', [ProductController::class, 'getProducts'])->name('products.get');

Route::get('/noticias_estatus/{id}', [NewsController::class, 'changeStatus'])->name('status');

Route::resource('/noticias', NewsController::class);

Route::get('/productos_stock', [ProductController::class, 'productsGraph'])->name('products_graph.get');

Route::post('/productos_editar', [ProductController::class, 'update'])->name('productos.update');

Route::get('/producto_pdf/{id}', [ProductController::class, 'pdf'])->name('producto_pdf.get');

Route::get('/productos_reporte', [ProductController::class, 'report'])->name('productos_reporte.get');

Route::resource('/productos', ProductController::class)->except('update');

Route::resource('/contacto', ContactController::class);

Route::get('/areas_listar', [FieldController::class, 'getFields'])->name('fields.get');

Route::resource('/areas', FieldController::class);

Route::get('/sugerencias_listar', [SuggestionController::class, 'getSuggestions'])->name('suggestions.get');

Route::get('/pdf', [SuggestionController::class, 'pdf'])->name('pdf');

Route::get('/excel', [SuggestionController::class, 'excel'])->name('excel');

Route::resource('/sugerencias', SuggestionController::class);

Route::get('/servicios_por_area', [ServiceController::class, 'servicesByFieldGraph'])->name('services_graph.get');

Route::get('/servicios_listar', [ServiceController::class, 'getServices'])->name('services.get');

Route::resource('/servicios', ServiceController::class);

Route::get('/graficas', [GraphController::class, 'index'])->name('graphs');

Route::get('/solicitudes_servicios_listar', [ServiceRequestController::class, 'getServicesRequests'])->name('services_requests.get');

Route::resource('/solicitudes_servicios', ServiceRequestController::class);
Route::get('/contacto', function () {
    return view('contacto.index');
});

Route::get('/inicio', function () {
    return view('inicio.index');
});

Route::get('/home', [UserController::class, 'login'])->name('home');