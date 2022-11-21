<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('productos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        $product->setFile($request['image']);
        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(int $product)
    {
        $products = Product::find($product);
        return view('productos.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product = Product::find($request['id']);

        if (isset($request['image']))
            $product->setFile($request['image']);

        $product->update($request->except('image'));

        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $product)
    {
        Product::find($product)->delete();
    }

    public function getProducts()
    {
        $products = Product::all();
        return DataTables::of($products)->make(true);
    }

    public function report() {
        $products = Product::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('productos.report', compact('products'));
        return $pdf->stream();
    }

    public function pdf(int $id) {
        $product = Product::find($id);
        $dataSheet = explode('*', $product->data_sheet);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('productos.pdf', compact('product', 'dataSheet'));
        return $pdf->stream();
    }

    public function productsGraph() {
        $data = Product::all();
        $labels = $data->pluck('name');
        $total = $data->pluck('stock');
        return response()->json([$labels, $total]);
    }
}
