<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('servicios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::all();
        return view('servicios.create', compact('fields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = Service::create($request->all());
        return response()->json($service);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(int $service)
    {
        $service = Service::find($service);
        $fields = Field::all();
        return view('servicios.edit', compact('service', 'fields'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $service)
    {
        $service = Service::find($service);
        $service->update($request->all());
        return response()->json($service);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $service)
    {
        Service::find($service)->delete();
    }

    public function getServices()
    {
        $services = Service::with('field')->get();
        return DataTables::of($services)->make(true);
    }

    public function servicesByFieldGraph()
    {
        $data = DB::table('fields')->select('fields.field', DB::raw('count(*) as total'))->join('services', 'fields.id', '=', 'services.field_id')->groupBy('services.field_id')->get();
        
        $labels = $data->pluck('field');
        $total =$data->pluck('total');

        return response()->json([$labels, $total]);
    }
}
