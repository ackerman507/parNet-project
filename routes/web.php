<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\HomeController;
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

//lista
Route::get('/', [HomeController::class, 'index'])->name('pagina-principal');

//listo
Route::get('/clientes', [HomeController::class, 'clientes'])->name('clientes');

//listo

Route::get('/quienes_somos', [HomeController::class, 'quienes_somos'])->name('quienes_somos');

//LISTO
Route::get('/productos_publico', [HomeController::class, 'productos'])->name('productos');

//listo
Route::get('/noticias_publico', [HomeController::class, 'noticias'])->name('noticias');


//listo
Route::get('/servicios_publico', [HomeController::class, 'servicios'])->name('servicios');

//listo
Route::get('/contactanos', [HomeController::class, 'contactanos'])->name('contactanos');

//listo
Route::get('/certificaciones', [HomeController::class, 'certificaciones'])->name('certificaciones');

Route::get('/telecomunicaciones', [HomeController::class, 'telecomunicaciones'])->name('telecomunicaciones');

Route::get('/redes_electricas', [HomeController::class, 'redesElectricas'])->name('redes_electricas');

Route::get('/circuito_cerrado', [HomeController::class, 'circuitosCerrados'])->name('circuito_cerrado');

Route::get('/corriente_regulada', [HomeController::class, 'corrienteRegulada'])->name('corriente_regulada');

Route::get('/data_centers', [HomeController::class, 'dataCenters'])->name('data_centers');

Route::get('/fibra_optica', [HomeController::class, 'fibraOptica'])->name('fibra_optica');

Route::get('/cables_estructurados', [HomeController::class, 'cablesEstructurados'])->name('cables_estructurados');

Route::get('/polizas', [HomeController::class, 'polizas'])->name('polizas');

Route::get('/outsourcing', [HomeController::class, 'outsourcing'])->name('outsourcing');

Route::get('/administracion', [HomeController::class, 'administracion'])->name('administracion');


Route::post('/usuario_sesion', [UserController::class, 'login'])->name('usuario_sesion');

// vista lista
Route::get('/inicia_sesion', [UserController::class, 'index'])->name('login'); 

//lista
Route::get('/panel_admin', [UserController::class, 'panelAdmin'])->name('panel_admin');

//no necesita vista
Route::get('/noticias_listar', [NewsController::class, 'getNews'])->name('news.get');
//no necesita vista
Route::get('/productos_listar', [ProductController::class, 'getProducts'])->name('products.get');
//no necesita vista
Route::get('/noticias_estatus/{id}', [NewsController::class, 'changeStatus'])->name('status');


//listo
Route::resource('/noticias', NewsController::class);


//nrv
Route::get('/productos_stock', [ProductController::class, 'productsGraph'])->name('products_graph.get');


//nrv
Route::post('/productos_editar', [ProductController::class, 'update'])->name('productos.update');


//nrv
Route::get('/producto_pdf/{id}', [ProductController::class, 'pdf'])->name('producto_pdf.get');


//nrv
Route::get('/productos_reporte', [ProductController::class, 'report'])->name('productos_reporte.get');


//listo
Route::resource('/productos', ProductController::class)->except('update');

//nrv
Route::resource('/contacto', ContactController::class);

//nrv
Route::get('/areas_listar', [FieldController::class, 'getFields'])->name('fields.get');

//listo
Route::resource('/areas', FieldController::class);

//nrv
Route::get('/sugerencias_listar', [SuggestionController::class, 'getSuggestions'])->name('suggestions.get');

//nrv
Route::get('/pdf', [SuggestionController::class, 'pdf'])->name('pdf');

//nrv
Route::get('/excel', [SuggestionController::class, 'excel'])->name('excel');

//listo
Route::resource('/sugerencias', SuggestionController::class);

Route::get('/servicios_por_area', [ServiceController::class, 'servicesByFieldGraph'])->name('services_graph.get');

//nrv
Route::get('/servicios_listar', [ServiceController::class, 'getServices'])->name('services.get');

//listo
Route::resource('/servicios', ServiceController::class);

//listo
Route::get('/graficas', [GraphController::class, 'index'])->name('graphs');

//nrv
Route::get('/solicitudes_servicios_listar', [ServiceRequestController::class, 'getServicesRequests'])->name('services_requests.get');

//listo
Route::resource('/solicitudes_servicios', ServiceRequestController::class);
Route::get('/contacto', function () {
    return view('contacto.index');
});

//borrar
Route::get('/inicio', function () {
    return view('inicio.index');
});

//nrv
Route::get('/home', [UserController::class, 'login'])->name('home');